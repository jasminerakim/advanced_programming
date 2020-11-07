<?php
class User
{
  public $name;
  public $username;
  public $email;

    function set_name($name)
    {
      $this->name = $name;
    }
    function set_username($username)
    {
      $this->username = $username;
    }
    function set_email($email)
    {
      $this->email = $email;
    }
    function get_name()
    {
      return $this->name;
    }
    function get_username()
    {
      return $this->username;
    }
    function get_email()
    {
      return $this->email;
    }

  function addFriend($name)
  {
    echo $name." Added a friend <br>";
  }
  function postStatus($name)
  {
    echo $name." Posted a status";
  }
}
  $example = new User();
  $example->set_name("Jasmine Rakim");
  $example->set_email("Rakimjasmine@gmail.com");
  $example->set_username("Duaeps");

  echo "Name: " . $example->get_name() . "<br>";
  echo "Username: " . $example->get_username() . "<br>";
  echo "Email: " . $example->get_email() . "<p>";

  $example->addFriend("You");
  $example->postStatus("You");
