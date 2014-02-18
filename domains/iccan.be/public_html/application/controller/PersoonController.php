<?php

class PersoonController extends AdminController
{
private $_persoonMapper;

public function __construct()
{
parent::__construct();

$this->_persoonMapper = $this->_loader->getModelMapper('persoon');
}


    public function changeLevel($playerid)
    {
        $player = $this->_getPlayer($playerid);
        if($player->getIsadmin() == True){
            $player->setIsadmin(False);
            $this->_persoonMapper->update($player);
        }else{
            $player->setIsadmin(True);
            $this->_persoonMapper->update($player);
        }

        redirect('persoon/index');
    }

    public function changeBlock($playerid)
    {
        $player = $this->_getPlayer($playerid);
        if($player->getIsblocked() == True){
            $player->setIsblocked(False);
            $this->_persoonMapper->update($player);
        }else{
            $player->setIsblocked(True);
            $this->_persoonMapper->update($player);
        }

        redirect('persoon/index');
    }

    public function edit($playerid)
    {
        $player = $this->_getPlayer($playerid);

        if ($_POST) {
            $player->setType($this->_input->post('type'));

                $this->_persoonMapper->update($player);
                $this->_navigateToOverview('Speler ' . $player . ' opgeslagen');
        }

        $this->_template->_player = $player;
        $this->_template->setPagetitle('Bewerk een speler');
        $this->_template->render('persoon/form');
    }



    public function index()
    {
        $players = $this->_persoonMapper->getAll();

        $this->_template->_players = $players;

        $this->_template->setPagetitle('Beheer van de gebruikers');
        $this->_template->render('persoon/index');
    }

    private function _getPlayer($playerid)
    {
        $player = $this->_persoonMapper->get($playerid);

        if (!$player) {
            $statusMessage = new Message('Deze gebruiker bestaat niet', false);
            $this->_setStatusMessage($statusMessage);
            redirect('persoon/index');
        }
        return $player;
    }
    private function _navigateToOverview($message)
    {
        $statusMessage = new Message($message, true);
        $this->_setStatusMessage($statusMessage);
        redirect('persoon/index');
    }
}
