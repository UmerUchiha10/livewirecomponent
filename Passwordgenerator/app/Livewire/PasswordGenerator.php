<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;

class PasswordGenerator extends Component
{
    public $password;
    public $password_confirmation;
    public $visible;
    

    public function mount(){
        $this->visible = false;
    }

    public function generatepassword():void
    {
        $lowercase = range(start: 'a', end:'z');
        $uppercase = range(start: 'A', end:'Z');
        $digits = range(start:0, end:9);
        $special = ['!','@','#','$', '%', '^','*'];
        $chars = array_merge($lowercase, $uppercase, $digits,$special);
        $length = env(key:'PASSSWORD_LENGTH', default:8);

        do{
            $password = array();
            for($i = 0; $i <= $length; $i++){
                $int = rand(0,count($chars) -1);
                array_push($password, $chars[$int]);
            } 
        }while(empty(array_intersect($special,$password)));

        $this->setPasswords(implode('',$password));
    }

    public function togglePassword(){
        $this->visible = !$this->visible;
    }

    public function setPasswords($value)
    {
        $this->password = $value;
        $this->password_confirmation = $value;
    }
    public function render()
    {
        return view('livewire.password-generator');
    }
}
