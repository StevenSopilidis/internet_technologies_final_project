const form = document.getElementById("my_form");

//indicator wether number of contestants where inserted
let inserted = false;

form.addEventListener("submit", async (e) => {
    e.preventDefault();
    if(!inserted)
    {
        const numberOfContestantants = document.getElementById("number_of_contestants").value;
        
        if(numberOfContestantants > 0)
        {
            //insert the rows to the table of contestants
            let table = document.getElementById("table_of_contestants");
            var insertedHtml =  
            `<tr>
            <th style="color: #ffffff; font-family: sans-serif">Username</th>
            <th style="color: #ffffff; font-family: sans-serif">BirthDate</th>
            </tr>`;
            for (let i = 0; i < numberOfContestantants; i++) {
                insertedHtml += `<tr>
                <th>
                    <input class="contentents_usernames" type="text" name="username" required>
                </th>
                <th>
                    <input class="contentents_birthdates" type="number" name="birthdate" required>
                </th>
                </tr>`;
            }
            document.getElementById("number_of_contestants").style.display = "none";
            document.getElementById("number_of_contestants_label").style.display = "none";    
            table.innerHTML = insertedHtml;
            document.getElementById("enter_contenstants_button").style.display = "none";    
            table.innerHTML += "<button id='enter_contestants_data_button' type='submit'>Enter Data</button>"

            inserted = true;
        }else {
            alert("Number of contestants cannot be 0");
        }
        
    }else {
        //get data of contestants
        const data = [];
        const usernames = document.getElementsByClassName("contentents_usernames");
        const birthDates = document.getElementsByClassName("contentents_birthdates");
        for (let i = 0; i < usernames.length; i++) {
            const username = usernames[i].value;
            const birthDate = birthDates[i].value;
            data[i] = { username, birthDate };
        } 
        
        //select the winner
        const winner1 = parseInt(Math.random() * data.length);
        const winner2 = parseInt(Math.random() * data.length);
        const born2003 = [];
        //get all the contestants that were born in 2003
        data.forEach(contestant => {
            if(contestant.birthDate == 2003)
            {
                born2003.push(contestant.username);
            }
        });
        const relocationUrl = window.location.href.split("/");
        relocationUrl[relocationUrl.length - 1] = `contest_winners.php?winner1=${data[winner1].username}&winner2=${data[winner2].username}&born2003=${born2003}`;
        window.location.href = relocationUrl.join("/");
    }
});

