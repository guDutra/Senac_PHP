<?php

class Company
{
    private static $conn;

    public static function getConnection()
    {
        if (empty(self::$conn)) {
            $connection = parse_ini_file('config/books.ini');
            self::$conn = new PDO(
                "mysql:host={$connection['host']};port={$connection['port']};dbname={$connection['name']}",
                "{$connection['user']}",
                "{$connection['pass']}",
                [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8']
            );
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$conn;
    }

    public static function save($person)
    {
        $conn = self::getConnection();
        if (empty($person['company_id'])) {
            $result = $conn->query("SELECT max(company_id) as next FROM company");
            $row = $result->fetch();
            $person['company_id'] = (int)$row['next'] + 1;
            $sql = "INSERT INTO company
                                    (company_id, company_name, company_fantasy, company_cnpj, company_cep,
                                     company_address, company_number, 
                                    company_district, company_phone, company_mail, company_city, company_state) VALUES
                                    (:company_id, :company_name, :company_fantasy, :company_cnpj, :company_cep,  
                                    :company_address, :company_number, 
                                    :company_district, :company_phone, :company_mail, :company_city, :company_state)";
        } else {
            $sql = "UPDATE company SET company_name = :company_name, company_cep=:company_cep, company_address = :company_address, company_district = :company_district, company_phone = :company_phone,
                 company_mail = :company_mail, company_city = :company_city, company_state= :company_state WHERE company_id = :company_id ";
        }

        $result = $conn->prepare($sql);

        return $result->execute(
            [
                ':company_id' => $person['company_id'],
                ':company_name' => $person['company_name'],
                ':company_fantasy' => $person['company_fantasy'],
                ':company_cnpj' => $person['company_cnpj'],
                ':company_cep' => $person['company_cep'],
                ':company_address' => $person['company_address'],
                ':company_number' => $person['company_number'],

                ':company_district' => $person['company_district'],
                ':company_phone'   => $person['company_phone'],
                ':company_mail' =>  $person['company_mail'],
                ':company_city' =>  $person['company_city'],
                ':company_state' =>  $person['company_state'],

            ]
        );
    }

    /**
     * Busca uma Pessoa pelo seu $id
     * @param $id
     *
     * @return mixed
     */
    public static function find($id)
    {
        $conn = self::getConnection();
        $result = $conn->query("SELECT * FROM company WHERE company_id='{$id}'");

        return $result->fetch();
    }

    public static function delete($id)
    {
        $conn = self::getConnection();
        $result = $conn->query("DELETE FROM company WHERE company_id='{$id}'");

        return $result;
    }

    public static function all()
    {
        $conn = self::getConnection();
        $result = $conn->query("SELECT * FROM company");

        return $result;
    }
}
