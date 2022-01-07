<?php
require_once("../interfaces/IReviewRepo.php");
require_once("../Utils/Dbconnection.php");

class ReviewRepo implements IReviewRepo
{
    private mysqli $dbConnection;

    function __construct(IDbConnection $dbConnection)
    {
        $this->dbConnection = $dbConnection->getConnection();   
    }

    public function CreateReview(DiskRating $rating): string
    {
        $sql = "INSERT INTO disk_ratings (Id, DISK_NAME, DISK_RELEASE_DATE, USER, REVIEW, USER_TEXT, REVIEWED_ON) VALUES (?,?,?,?,?,?,?)";
        //initialize prepared statement
        $stmt = mysqli_stmt_init($this->dbConnection);
        //prepare the statement
        if(!mysqli_stmt_prepare($stmt, $sql))
        {
            return "Could not prepare statement";
        }else {
            //bind params to statement
            try {
                mysqli_stmt_bind_param($stmt, "ssssiss", $rating->Id, $rating->DISK_NAME, $rating->RELEASED_ON, $rating->USER, $rating->REVIEW, $rating->USER_TEXT, $rating->DATE);
                $result = mysqli_stmt_execute($stmt);
                if(!$result)
                {
                    return $stmt->error;
                }
                return "success";
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
    }
}