<?php
include "../Models/DiskRating.php";

interface IReviewRepo
{
    //returns wether or not review was created successfully
    public function CreateReview(DiskRating $rating): string;
}