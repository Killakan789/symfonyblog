<?php
namespace App\Tests\Entity;

use App\Entity\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    public function testSettingCustomerFirstName()
    {
        $customer = new Customer();
        $firstName = "John";

        $customer->setFirstName($firstName);

        $this->assertEquals($firstName, $customer->getFirstName());
    }

    public function testSettingCustomerLastName()
    {
        $customer = new Customer();
        $lastName = "Doe";

        $customer->setLastName($lastName);

        $this->assertEquals($lastName, $customer->getLastName());
    }

    public function testSettingCustomerEmail()
    {
        $customer = new Customer();
        $email = "testemail.@gmail.com";

        $customer->setEmail($email);

        $this->assertEquals($email, $customer->getEmail());
    }

    public function testSettingCustomerPhonenumber()
    {
        $customer = new Customer();
        $phoneNumber = "999-99-999";

        $customer->setPhoneNumber($phoneNumber);

        $this->assertEquals($phoneNumber, $customer->getPhoneNumber());
    }





}