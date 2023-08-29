<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/login.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
}

.main {
    height: 100vh;
    min-height: 550px;
    background-image: url("https://images.unsplash.com/photo-1533090161767-e6ffed986c88?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=869&q=80");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    padding: 6% 28%;
}

.main__form {
    height: 100%;
    background-color: #fff;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

.main__form__inputs {
    height: 85%;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    padding: 0 5%;
}

.main__form__inputs h3 {
    letter-spacing: 3.5px;
    font-size: 2rem;
    font-weight: normal;
    color: #343434;
    opacity: 80%;
}

.main__form__inputs div {
    height: 2.4rem;
    display: flex;
    justify-content: center;
    align-items: flex-end;
    position: relative;
}

.main__form__inputs span {
    height: 2px;
    width: 0px;
    background: #1a7d9e;
    position: absolute;
    transition: width .8s;
}

.main__form__inputs div input {
    height: 100%;
    width: 100%;
    border: none;
    border-bottom: 1px solid #31416e;
    font-size: 1rem;
}

.main__form__inputs div input:focus {
    outline: none;
}

.main__form__inputs div input::placeholder {
    letter-spacing: 1px;
    font-size: .95rem;
}

#eye-icon {
    position: absolute;
    right: 1%;
    top: 30%;
    opacity: 80%;
    cursor: pointer;
    visibility: hidden;
}

.main__form__inputs a {
    text-decoration: none;
    align-self: center;
    color: #343434;
    letter-spacing: 1.5px;
    opacity: 85%;
    position: relative;
    overflow: hidden;
}

.main__form__inputs a:hover {
    color: #000;
    opacity: none;
}

/*BUTTONS*/

.main__form__buttons {
    height: 15%;
    display: flex;
}

.main__form__buttons .button {
    height: 100%;
    flex-basis: 0;
    flex-grow: 1;
    border: none;
    font-size: .95rem;
    display: flex;
    align-items: center;  /*add to the buttons display flex and justify content for use in span*/
}

.main__form__buttons .button:hover {
    cursor: pointer;
}

.main__form__buttons__btn1 {
    background: #f2f2f2;
    text-decoration: none;
    color: #000;
}

.main__form__buttons__btn1:hover {
    background: #d9d9d9;
}

.main__form__buttons__btn2 {
    background: #28385d;
    justify-content: end;
    color: #fff;
}

.main__form__buttons__btn2:hover {
    background: #385d8c;
}

.main__form__buttons .button span {
    margin: 0 6%;
    letter-spacing: 2px;
}

.main__form__buttons__btn1 span {
    opacity: 80%;
}


/*BUTTONS*/


/*mediaquerys*/

@media screen and (max-width: 920px) {
    .main {
        padding: 6% 12%;
    }

    .main__form__inputs h3 {
        text-align: center;
    }
}


@media screen and (max-width: 500px) {
    .main {
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .main__form__buttons .button {
        justify-content: center;
    }

    .main__form {
        height: 360px;
        flex-basis: 85%;
    }

} 

@media screen and (max-width: 250px) {
    html {
        font-size: 12px;
    }
}

    </style>
  <body>
      

    <div class="main">
    <form class="main__form" action="{{route('LoginController')}}" method="GET">

            <div class="main__form__inputs">
                <h3>LOGIN</h3>
                <div>
                    <input type="email" placeholder="  EMAIL" class="email" required id="input1" name="email">
                    <span id="span1"></span>
                </div>
                <div>
                    <input type="password" placeholder="  PASSWORD" required id="input2" name="password">
                    <i class="fa-solid fa-eye" id="eye-icon"></i>
                    <span id="span2"></span>
                </div>
            </div>

            <div class="main__form__buttons">
                <button class="main__form__buttons__btn2 button" type="submit">
                    <span>SIGN IN</span>
                </button>
            </div>
        </form>         
    </div>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
      const input1 = document.getElementById("input1");
const input2 = document.getElementById("input2");

const span1 = document.getElementById("span1");
const span2 = document.getElementById("span2");

input1.addEventListener("click", () => {span1.style.width = "100%"})
input1.addEventListener("blur", () => {span1.style.width = "0"})

input2.addEventListener("click", () => {span2.style.width = "100%"})
input2.addEventListener("blur", () => {span2.style.width = "0"})

// here begins the show the password

const eyeIcon = document.getElementById("eye-icon");

input2.addEventListener("input", () => {eyeIcon.style.visibility = "visible"})

let flag = 0;
eyeIcon.addEventListener("click", () => {
    
    if (flag == 0) {
        input2.type = "text";
        flag = 1;
        eyeIcon.setAttribute("class", "fa-solid fa-eye-slash")
    } else {
        input2.type = "password";
        flag = 0;
        eyeIcon.setAttribute("class", "fa-solid fa-eye")
    }

})
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>