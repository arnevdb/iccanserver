<?php

class TaakController extends AdminController
{
    public function __construct()
    {
        parent::__construct();

        $this->_categoryMapper = $this->_loader->getModelMapper('tag');
        $this->_questionMapper = $this->_loader->getModelMapper('taak');
        $this->_tagvMapper = $this->_loader->getModelMapper('tagvmanager');
    }

    public function index()
    {

        $this->_template->setPagetitle('Beheer de taken');
        $this->_template->render('taak/index');
    }

    public function add()
    {
        $question = new Vraag();

        if ($_POST) {
            $question->setVolgnummer($this->_input->post('volgnummer'));
            $question->setNaam($this->_input->post('naam'));
            $question->setOmschrijving($this->_input->post('omschrijving'));
            $question->setType($this->_input->post('type'));
            $question->setBelangrijkheid($this->_input->post('belangrijkheid'));
            $question->setTags($this->_input->post('tags'));


            $this->_validator->isRequired('volgnummer', $question->getVolgnummer());
            $this->_validator->isRequired('naam', $question->getNaam());
            $this->_validator->isRequired('omschrijving', $question->getOmschrijving());
            $this->_validator->isRequired('belangrijkheid', $question->getBelangrijkheid());
            $this->_validator->isRequired('type', $question->getType());
            $this->_validator->isRequired('tags', $question->getTags());

            if($this->_validator->isValidForm())
            {
                $this->_questionMapper->add($question);
                $tags = explode("/",$question->getTags());
                foreach($tags as $tagnaam){
                    error_log($tagnaam);
                    $tag = $this->_categoryMapper->getByName($tagnaam);
                    $vraag = $this->_questionMapper->getByvolgnummer($question->volgnummer);
                    $tagvmanager = new Tagvmanager();
                    $tagvmanager->setTagid($tag->id);
                    $tagvmanager->setVraagid($vraag->id);
                    $this->_tagvMapper->add($tagvmanager);

                }
                $this->_navigateToOverview("Nieuwe vraag toegevoegd.");
            } else {
                $this->_setErrorMessages('Er zijn fouten in het maken van de vraag.');
            }
        }

        $this->_template->_question = $question;
        $this->_template->setPagetitle('Maak nieuwe vraag');
        $this->_template->render('vraag/form');
    }
    public function edit($questionid)
    {
        $categories = $this->_categoryMapper->getAll();
        $question = $this->_getQuestion($questionid);

        if ($_POST) {
            $question->setCategoryid($this->_input->post('categoryname'));
            $question->setQuestiontext($this->_input->post('questiontext'));
            $question->setPoints($this->_input->post('points'));
            $question->setAnswers($this->_input->post('answers'));
            if($this->_input->post('type') == 1){
                $question->setQuestiontype('multiple-choice');
            }else{
                $question->setQuestiontype('open');
            }


            $this->_validator->isRequired('categoyid', $question->getCategoryid());
            $this->_validator->isRequired('questiontext', $question->getQuestiontext());
            $this->_validator->isRequired('points', $question->getPoints());
            $this->_validator->isRequired('answers', $question->getAnswers());
            $this->_validator->isRequired('questiontype', $question->getQuestiontype());


            if ($this->_validator->isValidForm()) {
                $this->_questionMapper->update($question);
                $this->_navigateToOverview('vraag ' . $question . ' opgeslagen');
            }
            else {
                $this->_setErrorMessages('Er zijn fouten in het bewerken van de vraag.');
            }
        }

        $this->_template->_categories = $categories;
        $this->_template->_question = $question;
        $this->_template->setPagetitle('Bewerk een vraag');
        $this->_template->render('vraag/form');
    }

    public function delete($questionid)
    {
        $question = $this->_getQuestion($questionid);
        $this->_template->_question = $question;

        $this->_questionMapper->delete(array('id' => $questionid));
        $this->_navigateToOverview('Vraag ' . $question . ' gewist.');
    }

    private function _navigateToOverview($message)
    {
        $statusMessage = new Message($message, true);
        $this->_setStatusMessage($statusMessage);
        redirect('vraag/index');
    }
    private function _getQuestion($questionid)
    {
        $question = $this->_questionMapper->get($questionid);

        if (!$question) {
            $statusMessage = new Message('Deze vraag bestaat niet', false);
            $this->_setStatusMessage($statusMessage);
            redirect('vraag/index');
        }
        return $question;
    }


}