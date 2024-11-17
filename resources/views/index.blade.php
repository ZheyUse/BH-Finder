<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    

    <title>CAJBOLO</title>
    <link href="{{ asset('css/index.css') }}" rel="stylesheet" />
           
       
       
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=login" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />



<style>
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.header {
    background-color: #213a25;
    --s: 60px;
  --c1: #335a39;
  --c2: #213a25;
  --_g: radial-gradient(
    25% 25% at 25% 25%,
    var(--c1) 99%,
    rgba(0, 0, 0, 0) 101%
  );
  background: var(--_g) var(--s) var(--s) / calc(2 * var(--s))
      calc(2 * var(--s)),
    var(--_g) 0 0 / calc(2 * var(--s)) calc(2 * var(--s)),
    radial-gradient(50% 50%, var(--c2) 98%, rgba(0, 0, 0, 0)) 0 0 / var(--s)
      var(--s),
    repeating-conic-gradient(var(--c2) 0 50%, var(--c1) 0 100%)
      calc(0.5 * var(--s)) 0 / calc(2 * var(--s)) var(--s);
    height: 15vh;
    display: flex;
   
    
}

.header-contain {
    width: 100%;

    display: flex;

    align-items: center;
  

}

.header-logo {
    padding-left: 5%;

}

.CBlogo {
    height: 30vh;
}

.sign-btns {

    display: flex;

    gap: 20%;
    margin-left: auto;
    padding-right: 5%;

}

.login,.signup {
    font-family: "Roboto", sans-serif;
    font-weight: 400;
    font-style: normal;
    color: #bbd455;
}
.signup:hover, .login:hover{
    color: white;
    cursor: pointer;
}
.search-container{

    height: 10vh;
    display: flex;
    align-items: center;
    justify-content: center;

    background-color: #ffffff;
    background-image: radial-gradient(rgba(12, 12, 12, 0.171) 2px, transparent 0);
    background-size: 30px 30px;
    background-position: -5px -5px;
    
}
.search-s1{
background-color: #bbd455;
height: 8vh;
width: 50%;
border-radius: 1.5vh;
display: flex;
align-items: center;
justify-content: center;
}
.search-s2{
    background-color: #fff;
    height: 6vh;
    width: 98%;
    border-radius: 1vh;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: "Roboto", sans-serif;
    font-weight: 400;
    font-style: normal;
    }
    select{
        padding-left: 5%;
        border-left: 3px dotted #bbd455;
        border-bottom: none;
        border-top: none;
        border-right: none;
       
        outline: none;
        appearance: none;
        width: 150px;
        cursor: pointer;
    }
   
h6{
    color: #898989;
}
.search-btn{
    
    height: 100%;
    width: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #468453;
    color: #fff;
   
}
.search-btn:hover{
    background-color: #e1ff67;
    color: #468453;
    cursor: pointer;
}
.search-options{
    display: flex;
    align-items: center;
    justify-content: space-around;
    width: 100%;
}

.body1{
    height: 100vh;
    
    background-color: #000000;
    display: flex;
    justify-content: center;
    flex-direction: column;

    background-image: url('https://scontent.fceb2-1.fna.fbcdn.net/v/t39.30808-6/457104912_905965031553408_3618651558009224360_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=cc71e4&_nc_eui2=AeGxxhfdlr_PUyGcrJojaJJYOrnmXNwojcw6ueZc3CiNzP4rlGTUcV2Jre2bzdQvpwwdwf5miV5qbtQrGl9tmAN_&_nc_ohc=EpA6MrQA2CkQ7kNvgG3Ox4t&_nc_zt=23&_nc_ht=scontent.fceb2-1.fna&_nc_gid=Ay4GhObZyQk4QVboda-gUe8&oh=00_AYBkYFbDswFUub0wkpy-2z2q8YVmlVcFz76ZuGNP4qw5Cg&oe=67378772');
    background-size: cover; /* Makes the image fill the div */
    background-position: center; /* Centers the image */
    background-repeat: no-repeat; /* Prevents repeating */
 
    
}
.body1-text{
    display: flex;
    flex-direction: column;
    
    gap: 3vh;
    padding-left: 5vh;
    width: 50%;

    
    backdrop-filter: blur(2px);
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
}
h1,h2,h3,h4,h5,h6, p{
    font-family: "Roboto", sans-serif;
    font-weight: 400;
    font-style: normal;
}
.login-btn{
display: flex;
justify-content: center;
align-items: center;
color: #bbd455;
}

.login-btn:hover{
    color: #fff;
}
.login-btn .material-symbols-outlined,
.login-btn h3 {
    color: inherit;
}

.t1{
    color: #e1ff67;
}
.t2{
    color: #fff;
    font-size: 10vh;
    font-family: "Roboto", sans-serif;
    font-weight: 400;
    font-style: normal;
}
.t3{
    color: #fff;
    line-height: 2;
}


.marquee {
    overflow: hidden;
    white-space: nowrap;
    box-sizing: border-box;
    height: 10vh;
   display: flex;
   align-items: center;
   justify-content: center;
   background-color: #468453;
}

.marquee p {
    display: inline-block;
    padding-left: 100%; /* Space before the text */
    animation: marquee 30s linear infinite;
    font-size: 150%;
    color: white;
}

@keyframes marquee {
    0% {
        transform: translate(0, 0);
    }
    100% {
        transform: translate(-100%, 0); /* Move text out of view */
    }
}

.body2{
    height: 100vh;
    
    background-color: #000000;
    display: flex;
    align-items: center;    


    background-image: url('https://images.pexels.com/photos/29057752/pexels-photo-29057752/free-photo-of-dew-covered-leaves-on-autumn-ground.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
    background-size: cover; /* Makes the image fill the div */
    background-position: center; /* Centers the image */
    background-repeat: no-repeat; /* Prevents repeating */
 
    
}
.body-btns{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 50%;
    height: 35%;
    gap: 10vh;
    
}
.searchnow,.learnmore{
    width: 35%;
    height: 15%;
    background-color:#e1ff67;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #213a25;
    cursor: pointer;
    transition: transform 0.5s ease;
    border-radius: 1vh;
}
.searchnow:hover,.learnmore:hover{
    background-color: #335a39;
    color: #fff;
    transform: scale(1.10);
    border: 1px solid #e1ff67;
    
}

</style>
</head>
<body>
    <div class="header">
        <div class="header-contain">
            <div class="header-logo"><img class="CBlogo" src='https://svgshare.com/i/1Bvg.svg' title='CajboloLogo2' /></div>
            <div class="sign-btns">
                <div class="login-btn">
                    <span class="material-symbols-outlined login">
                        login
                        </span>
                        <span><h3 class="login">Login</h3></span>
                </div>
               
                
                
                
                <span><h3 class="signup">Register</h3></span></div>
        </div>
    </div>
    <div class="search-container">
        <div class="search-s1"><div class="search-s2">
            <div class="search-options">
                <div class="option1">
                    <h6>Gate</h6>
                    <div class="gate">
                        <form>
                            <label for="options"></label>
                            <select id="options" name="gate">
                                <option value="option1">1st Gate</option>
                                <option value="option2">2nd Gate</option>
                                <option value="option3">3rd Gate</option>
                            </select>
                        </form>
                    </div>
                </div>
                <div class="option2">
                    <h6>Budget</h6>
                    <div class="budget">
                        <form>
                            <label for="budget"></label>
                            <select id="options" name="options">
                                <option value="option1">Pesos 500 - 1000</option>
                                <option value="option2">Pesos 1000 - 1500</option>
                                <option value="option3">Pesos 1500 - 2000</option>
                                <option value="option3">Pesos 2000+</option>
                            </select>
                        </form>
                    </div>
                </div>
                
            </div>
           
            <div class="search-btn" style="vertical-align:middle"><span class="material-symbols-outlined">
                search
                </span>Search</div>
    </div>
</div>
    </div>
    <div class="body1">
        <div class="body1-text">
            <span><h5 class="t1">STAY AT HOME WITH YOUR NEW BOARDING HOME</h5></span>
            <span><h1 class="t2">Find the best home <br> For you to stay</h1></span>
            <span><h4 class="t3"> We understand how challenging it can be to find the right place to stay. That’s why BH Finder <br> is here to help you find a place that feels like home.</h5></span>
        </div>
        <div class="body-btns">
            <div class="searchnow"><h4>Find Now</h4></div>
            <div class="learnmore"><h4>Learn More</h4></div>
        </div>
    </div>
    <div class="marquee">
        <p>Find the Best BOARDING HOUSE with 100+ recommendations and great services and qualities.</p>
        

    </div>
    <div class="body2">
       
    </div>
</body>
</html> 