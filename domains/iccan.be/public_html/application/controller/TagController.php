<?php

class TagController extends AdminController
{
    private $_categoryMapper;

    public function __construct()
    {
        parent::__construct();

        $this->_categoryMapper = $this->_loader->getModelMapper('tag');
       // $this->_questionMapper = $this->_loader->getModelMapper('question');
    }

    public function add()
    {
        $tag = new Tag();

        if ($_POST) {
            $tag->setNaam($this->_input->post('naam'));
            $tag->setOmschrijving($this->_input->post('omschrijving'));

            $this->_validator->isRequired('naam', $tag->getNaam());
            $this->_validator->isRequired('omschrijving', $tag->getOmschrijving());

            if ($this->_validator->isValidForm()) {
                $this->_categoryMapper->add($tag);
                $this->_navigateToOverview('Nieuwe categorie toegevoegd.');
            }
            else {
                $this->_setErrorMessages('Er zijn fouten in het toevoegen van de categorie.');
            }
        }

        $this->_template->_category = $tag;
        $this->_template->setPagetitle('voeg tag toe');
        $this->_template->render('tag/form');
    }

    public function edit($categoryid)
    {
        $tag = $this->_getCategory($categoryid);

        if ($_POST) {
            $tag->setNaam($this->_input->post('naam'));
            $tag->setOmschrijving($this->_input->post('omschrijving'));

            $this->_validator->isRequired('naam', $tag->getNaam());
            $this->_validator->isRequired('omschrijving', $tag->getOmschrijving());

            if ($this->_validator->isValidForm()) {
                $this->_categoryMapper->update($tag);
                $this->_navigateToOverview('Tag ' . $tag . ' opgeslagen');
            }
            else {
                $this->_setErrorMessages('Er zijn fouten in het bewerken van de tag.');
            }
        }

        $this->_template->_category = $tag;
        $this->_template->setPagetitle('Bewerk een tag');
        $this->_template->render('tag/form');
    }

    public function delete($categoryid)
    {
        $category = $this->_getCategory($categoryid);
        $this->_template->_category = $category;

        $this->_categoryMapper->delete(array('id' => $categoryid));
        $this->_navigateToOverview('Categorie ' . $category . ' gewist.');
    }

    public function Questions($categoryid)
    {

        $questions = $this->_questionMapper->getCatQuestions($categoryid);
        $category = $this->_getCategory($categoryid);
        $this->_template->_questions = $questions;
        $this->_template->setPagetitle('Vragen voor de categorie '.$category->getCategoryname());
        $this->_template->render('tag/questions');
    }

    public function getQuestions($categoryid)
    {
      return $this->_categoryMapper->getQuestions($categoryid);
    }

    public function index()
    {
        $categories = $this->_categoryMapper->getAll();

        //foreach($categories as $category){
       //     $amount = $this->getQuestions($category->id);
      //      $category->setQuestionCount(count($amount));

     //   }
        $this->_template->_categories = $categories;

        $this->_template->setPagetitle('Beheer van de tags');
        $this->_template->render('tag/index');
    }

    private function _getCategory($categoryid)
    {
        $category = $this->_categoryMapper->get($categoryid);

        if (!$category) {
            $statusMessage = new Message('Deze categorie bestaat niet', false);
            $this->_setStatusMessage($statusMessage);
            redirect('tag/index');
        }
        return $category;
    }

    private function _navigateToOverview($message)
    {
        $statusMessage = new Message($message, true);
        $this->_setStatusMessage($statusMessage);
        redirect('tag/index');
    }
}