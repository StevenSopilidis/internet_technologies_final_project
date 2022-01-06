<?php 
include "../Utils/Random_id_generator.php";


class DiskRating
{
    //props that match the table disk_rating
    public int $Id;
    public string $DISK_NAME;
    public DateTime $DATE;
    public string $USER;
    public int $REVIEW;
    public string $USER_TEXT;

    function __construct(int $disk_name, string $user, int $review, string $user_text)
    {
        $this->USER = $user;
        $this->DISK_NAME = $disk_name;
        $this->REVIEW = $review;
        $this->USER_TEXT = $user_text;
        $this->DATE = date("Y/m/d");
        $this->Id = generate_random_id();
    }

}

?>