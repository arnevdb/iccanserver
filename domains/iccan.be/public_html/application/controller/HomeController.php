<?php

class HomeController extends Controller
{
    private $_playerMapper;
    public function __construct()
    {
        parent::__construct();
        $this->_playerMapper = $this->_loader->getModelMapper('persoon');
    }

    public function index()
    {
        // setting title
        $this->_template->setPagetitle('Iccan');

        // rendering layout 'default' with view file 'home'
        $this->_template->render('home/index');
    }

    public function login()
    {
        if ($this->_auth->getCurrentUser()) {
            $this->_setStatusMessage(new Message('Je bent al ingelogd.', false));
            redirect('home/onlyLoggedIn');
        }

        if ($_POST) {
            $statusMessage = $this->_auth->login($this->_input->post('email'), $this->_input->post('password'));
            if ($statusMessage->getStatus()) {
                $this->_setStatusMessage($statusMessage);
                redirect('home/onlyLoggedIn');
            } else {
                $this->_setStatusMessage($statusMessage, true);
            }
        }

        $this->_template->render('home/loginform');
    }


    public function logout()
    {
        $this->_auth->logout();
        $this->_setStatusMessage(new Message('Succesvol uitgelogd'));
        redirect('home/index');
    }

    public function onlyLoggedIn()
    {
        $this->_checkIfUserIsLoggedIn();

        $this->_template->render('home/private');
    }
    public function add()
    {
        $player = new Persoon();

        if ($_POST) {
            $player->setVoornaam($this->_input->post('voornaam'));
            $player->setNaam($this->_input->post('naam'));
            $player->setEmail($this->_input->post('email'));
            $player->setGeboortedatum($this->_input->post('geboortedatum'));
            $player->setGeslacht($this->_input->post('geslacht'));
            $player->setGebruikersnaam($this->_input->post('gebruikersnaam'));
            $player->setPasswoord($this->_input->post('password'));
            $player->setType("user");



            $this->_validator->isRequired('voornaam', $player->getVoornaam());
            $this->_validator->isRequired('naam', $player->getNaam());
            $this->_validator->isRequired('email', $player->getEmail());
            $this->_validator->isRequired('geboortedatum', $player->getGeboortedatum());
            $this->_validator->isRequired('geslacht', $player->getGeslacht());
            $this->_validator->isRequired('gebruikersnaam', $player->getGebruikersnaam());
            $this->_validator->isRequired('password', $player->getPasswoord());

            $this->_validator->isValidLength('naam',$player->getNaam());
            $this->_validator->isValidLength('password',$player->getPasswoord());
            $this->_validator->isConfirmed('confirm',$player->getPasswoord(),$this->_input->post('confirm'));
            $this->_validator->isValidEmail('email',$player->getEmail());

            if($this->_validator->isValidForm())
            {
                $password = $player->getPasswoord();
                $player->setHashedPassword($player->getPasswoord());
                $this->_playerMapper->add($player);

                $statusMessage = $this->_auth->login($player->getGebruikersnaam(), $password);
                if ($statusMessage->getStatus()) {
                    $this->_setStatusMessage($statusMessage);
                    redirect('home/onlyLoggedIn');
                } else {
                    $this->_setStatusMessage($statusMessage, true);
                }

            }
            else {
                $this->_setErrorMessages('Er zijn fouten in het registratieformulier.');
            }

        }

        $this->_template->setPagetitle('Registreer speler');
        $this->_template->render('home/registerform');
    }

}