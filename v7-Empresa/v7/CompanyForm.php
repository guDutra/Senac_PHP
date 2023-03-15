<?php

require_once __DIR__ . '/classes/Company.php';

class CompanyForm
{
    private $html;
    private $data;

    public function __construct()
    {
        $this->html = file_get_contents('html/form.html');
        $this->data = [
            'company_id' => null,
            'company_name' => null,
            'company_fantasy' => null,
            'company_cnpj' => null,
            'company_cep' => null,
            'company_address' => null,
            'company_number' => null,
            'company_complement' => null,
            'company_district' => null,
            'company_phone' => null,
            'company_mail' => null,
            'company_city' => null,
            'company_state' => null

        ];
    }

    public function edit($param)
    {
        try {
            $id = (int)$param['id'];
            $company = Company::find($id);
            $this->data = $company;
        } catch (Exception $e) {
            print $e->getMessage();
        }
    }

    public function save($param)
    {
        try {
            Company::save($param);
            $this->data = $param;
            print "<div class='trigger trigger-sucess center'><p>Pessoa salva com Sucesso!</p></div>";
        } catch (Exception $e) {
            print $e->getMessage();
        }
    }

    public function show()
    {
        $this->html = str_replace(
            [
                '{company_id}',
                '{company_name}',
                '{company_fantasy}',
                '{company_cnpj}',
                '{company_cep}',
                '{company_address}',
                '{company_number}',
             
                '{company_district}',
                '{company_phone}',
                '{company_mail}',
                '{company_city}',
                '{company_state}'
            ],
            [

                $this->data['company_id'],
                $this->data['company_name'],
                $this->data['company_fantasy'],
                $this->data['company_cnpj'],
                $this->data['company_cep'],
                $this->data['company_address'],
                $this->data['company_number'],
               
                $this->data['company_district'],
                $this->data['company_phone'],
                $this->data['company_mail'],
                $this->data['company_city'],
                $this->data['company_state']


            ],
            $this->html
        );

        //$this->html = str_replace($search, $this->data, $this->html);

        print  $this->html;
    }
}
