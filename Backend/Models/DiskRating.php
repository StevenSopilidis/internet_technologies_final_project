<?php 
class DiskRating
{
    //props that match the table disk_rating
    public string $Id;
    public string $DISK_NAME;
    //date review was made
    public string $DATE;
    public string $USER;
    public int $REVIEW;
    public string $USER_TEXT;
    //date disk was released at
    public string $RELEASED_ON;

    function __construct(string $disk_name, string $user, int $review, string $user_text, string $released_on)
    {
        $this->USER = $user;
        $this->DISK_NAME = $disk_name;
        $this->REVIEW = $review;
        $this->USER_TEXT = $user_text;
        $this->DATE = date("Y/m/d");
        $this->Id = $this->generateRandomId();
        $this->RELEASED_ON = $released_on;
    }

    //private function to generate random 64 length id for entity DiskRating
    private function generateRandomId(): string
    {
        $values = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $id = array();
        for ($i=1; $i <= 64; $i++) { 
            $rand = random_int(0, strlen($values) - 1);
            $id[$i] = $values[$rand];
        }
        return implode($id);
    }

    //function for validating data
    //returns error message if something went wrong
    //else empty string
    function validateData(): string
    {
        if(strlen($this->USER) < 3 || strlen($this->USER) > 255)
        {
            return "Username must be between 3 and 255 chars long";
        }
        if($this->REVIEW < 0 || $this->REVIEW > 5)
        {
            return "Review must be between 0 and 5 stars";
        }
        
        if(strlen($this->USER_TEXT) < 10 || strlen($this->USER_TEXT) > 500)
        {
            return "ReviewText must be between 10 and 500 chars long";
        }
        
        if(strlen($this->DISK_NAME) < 0 || strlen($this->DISK_NAME) > 255)
        {
            return "DiskName must be between 10 and 500 chars long";
        }

        return "";  
    }
}

?>