const submissionform = document.getElementById("my_form");


submissionform.addEventListener("submit", async (e) => {
    e.preventDefault();
    //get the form data
    const diskName = document.getElementById("disk_name_selection").value;
    const releasedOn = document.getElementById("dick_released_on").value;
    const username = document.getElementById("username").value;
    const reviewText = document.getElementById("reviewText").value;
    const review = document.getElementById("review").value;

    const requestData = {diskName,releasedOn, username, reviewText, review};

    //make api request o backend endpoint
    try {   
        const request_url = window.location.href.split("/");
        request_url[request_url.length - 1] = "backend/api/review.php";
        const response = await fetch(request_url.join("/"), {
            method: "POST",
            body: JSON.stringify(requestData),
        });
        const result = await response.json();
        if(result.error != null)
        {
            alert(result.error);
        }else {
            alert("Review saved successfully");
        }
    } catch (err) {
        alert("Review could not be saved");
    }
})