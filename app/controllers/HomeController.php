<?php
class HomeController extends Controller
{


public function index()
{
    $ClientModel = $this->model('ClientModel');
    $TeamModel   = $this->model('TeamModel');
    $EventModel  = $this->model('EventModel');
    $CampaignModel = $this->model('CampaignModel');

    $clients = $ClientModel->limit(10)->get();
    $teams   = $TeamModel->limit(8)->get();
    $events  = $EventModel->limit(8)->get();
    $campaign  = $CampaignModel->limit(1)->get();

   // p($campaign[0]->campaignMedia);
    $this->view('index', [
        'clients' => $clients,
        'teams'   => $teams,
        'events'  => $events,
        'campaign'=> $campaign
    ]);
}


}

