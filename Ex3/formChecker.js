document.addEventListener("DOMContentLoaded",() =>
{
    document.querySelector("#submit").addEventListener("click",(e) =>
    {
 
        let Banana = document.getElementById('Banana');
        let Apple = document.getElementById('Apple');
        let Watermelon = document.getElementById('Watermelon');
        let email = document.getElementById('username');
        let password = document.getElementById('password');
        let free = document.getElementById('free');
        let fifty = document.getElementById('50');
        let five = document.getElementById('5');


        if (Banana.value == "" && Apple.value == "" && Watermelon.value == "")
        {
            alert("Quantities cannot be blank or negative (zero is fine)");
            e.preventDefault();
        }
        if (!checkEmail(email.value))
        {
            alert("Username must be in the form of an email address (name@domain.com)");
            e.preventDefault();
        }
        if(password.value.length == 0)
        {
            alert("Password field cannot be blank");
            e.preventDefault();
        }
        if (free.checked == false && fifty.checked == false && five.checked == false)
        {
            alert("You must pick a shipping option");
            e.preventDefault();
        }
    });


    const checkEmail=(email) =>
    {   
        for (let i = 0; i < email.length; ++i)
        {
            if (email[i] == "@" && i != 0 && i != email.length-1)
            {
                return true;
            }
        }
        return false;
    }
});