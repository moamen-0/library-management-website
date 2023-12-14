/* the main function  */
<?php
header("Content-type: text/css");
?>
:root{
    --paragraph-color:#748182
    --bg-gray:#f7f7f7;
}
p{
    color: #748182; 
    line-height: 1.6;
    font-size: 15px;
}
body{
    font-family: 'Poppins', sans-serif;
}
h1,h2,h3,h4,h5,h6{
    font-family: 'Montserrat', sans-serif;
}
a{
    color: inherit;
    text-decoration: none;
}

html{
    scroll-behavior: smooth;
}
ul{
   list-style: none;
   display: flex;
}
a{
   text-decoration: none;
   color: inherit;
}

.container{
   width:85%;
   margin: auto;
   padding:50px 0px ;

}
.container2{
   width:85%;
   margin: auto;

}


/* navbare */
#nav-bar {
    color: black;
   
}
#nav-bar  {
    color: black;
   
}

#nav-bar .nav-item .nav-link{
    overflow: hidden;
    position: relative;
}
#nav-bar .nav-item .nav-link::after{
    content: " ";
    position: absolute;
    height: 2px;
    width: 80%;
    bottom: 0;
    left: -100%;
    background-color: teal;
    transition: left 0.2s;
}
#nav-bar .nav-item .nav-link .active::after{
    left: 9%;
}

#nav-bar{
    background-image: linear-gradient(rgba(0, 0, 0, 0.4) 0% 100%);
    position: absolute;
    right: 0px;
    left: 0px;
    /* box-shadow:5px 5px 10px #748182; */
}
#nav-bar .navbar-nav .nav-item a {
    color: #fff;
    font-size: 18px;
    font-weight: 400;
}
/* login and join buttons */
#nav-bar .nav-item .log,.join{
    padding: 10px;
    background-color:#fff;
    border-radius: 15px;
    color:black !important ;
    font-weight: 800 !important;
    margin-right: 10px;
}

#nav-bar .nav-item .log:hover{
    background-color: #141414;
    color: #fff !important;
}
#nav-bar .nav-item .join:hover{
    background-color: #141414;
    color: #fff !important;
}




/* home */
header{
    background-image: linear-gradient(rgba(0,0,0,0.4) 0% 100%),url(../images/backgrounds/12.jpg);
    height: 100vh;
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
}
header .header-caption{
    font-size: 50px;
    font-weight: 800;
}
header h2{
     font-size: 60px;
     font-weight: 400;
}
header span{
     font-size: 60px;
}
header h2::after{
    content: "|";
    animation-name:typing ;
    animation-duration: 10s;
    animation-iteration-count: infinite;
}
@keyframes typing {
    0%{content: "R|"}
    2%{content: "Re|"}
    4%{content: "Rea|"}
    6%{content: "Read|"}
    8%{content: "Reade|"}
    10%{content: "Reader|"}
    12%{content: "Readers|"}
    14%{content: "Reader|"}
    18%{content: "Reade|"}
    20%{content: "Read|"}
    22%{content: "Rea|"}
    24%{content: "Re|"}
    26%{content: "R|"}
    30%{content: "|"}
    32%{content: "S|"}
    34%{content: "St|"}
    36%{content: "Stu|"}
    38%{content: "Stud|"}
    40%{content: "Stude|"}
    42%{content: "Studen|"}
    44%{content: "Students|"}
    46%{content: "Studen|"}
    48%{content: "Stude"}
    50%{content: "Stud|" }
    52%{content: "Stu|"}
    54%{content: "St|"}
    56%{content: "S|"}
    60%{content: "|"}
    62%{content: "S|"}
    64%{content: "Se|"}
    66%{content: "Sea|"}
    68%{content: "Sear|"}
    70%{content: "Searc|"}
    72%{content: "Search|"}
    74%{content: "Searche|"}
    76%{content: "Searchers|"}
    78%{content: "Searche|"}
    80%{content: "Search|"}
    82%{content: "Searc|"}
    84%{content: "Sear|"}
    86%{content: "Sea|"}
    88%{content: "Se|"}
    90%{content: "S|" }
    100%{content: "|" }
    
    
    
}
#HOME .social-icons  .icon {
    width: 35px;
    height: 35px;
    background-color:rgba(0, 0, 0,.4);
    border-radius: 50%;
    cursor: pointer;
}

/* about */
#about{
    background-color: #fff;
}
#about .card_image img{
    height: 80vh;
}
#about .card_text{
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin: auto;

}
#about .card_text h2{
    font-weight: 800;
    
}
#about .icons{
    margin-top: 20px;

    
}
#about .icons p{
    padding-top: 5px;
    
}
#about .d-flex i{
    margin-bottom:20px;
    margin-right: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 35px;
    height: 35px;
    border: 1px solid ;
    border-radius: 50%;
    cursor: pointer;
    
}
#about .d-flex i:hover{
    background-color: #212529;
    color: #fff;
    
}




/* about2 */
#about2{
    background-color: #F7F7F7;
}
#about2 .card_image img{
    height: 80vh;
    width: 90%;
}
#about2 .card_text{
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin: auto;

}
#about2 .card_text h2{
    font-weight: 800;
    
}
#about2 .d-flex{
    margin-top: 20px;

    
}
#about2 .d-flex p{
    padding-top: 5px;
    
}
#about2 .icons i{
    margin-bottom:20px;
    margin-right: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 35px;
    height: 35px;
    border: 1px solid ;
    border-radius: 50%;
    cursor: pointer;
    
}
#about2 .icons i:hover{
    background-color: #212529;
    color: #fff;
    
}

/* librarians */

#chefs{
    padding-top: 80px;
    padding-bottom: 60px;

}
#chefs .chef-text{
    text-align: center;   
    padding-bottom: 40px;
}
#chefs .chef-text p{
    color: #7F7F90  ;
    font-family: 'Lato', sans-serif;
    font-size: 14px;
    font-weight: 400;

}
#chefs .chef-text h2{
    color: #212529    ;
    font-family: 'Amatic SC', sans-serif;
    font-size: 50px;
    font-weight: 400;

}
#chefs .chef-text h2 span{
    color:#E2964E;
    font-family: 'Amatic SC', sans-serif;
    font-size: 50px;
    font-weight: 400;

}

#chefs .chef-data{
    display: flex;
    justify-content: space-between;
   
}
#chefs .chef1{
   width: 31%;
   text-align: center;
   border-radius: 10px;
   position: relative;
   transition: transform .5s;
   overflow: hidden;
   box-shadow:10px 10px 30px  #EEEEEE ;
}

#chefs .icons{
    background-color: #EEEEEE;
    position: absolute;
    width: 45px;
    height: 170px;
    top: 20px;
    right: 15px;
    border-radius:5px ;
    transform: translateX(140%);
    transition: transform .5s .5s;
    opacity: .4;
    font-size: 16px;
    display: flex;
    flex-direction: column;

    
    
}

#chefs .icons ul{
    display: flex;
    flex-direction: column;
    position: absolute;
    right:0;
    
    
}
#chefs .icons i:hover {
    color:#141414;
   
    
    
}
#chefs .chef1:hover .icons{
    transform: translateX(0);
    
    
    
}
#chefs .icons i{
    color: #6b6b70;
    padding: 13px;
   

    
}

#chefs .chef1:hover{
    transform: scale(110%);
    
}
#chefs .chef1 h3{
    color: #7F7F90;
    font-family: 'Inter', sans-serif;
    font-size: 18.72px;
    font-weight: 700;
   margin-top: 10px;
   margin-bottom: 10px;
}
#chefs .chef1 h5{
    color: #212529;
    font-family: 'Lato', sans-serif;
    font-size: 14px;
    font-weight: 600;
   margin-top: 10px;
   margin-bottom: 10px;
}
#chefs .chef1 p{
    color: #7F7F90;
    font-family: 'Lato', sans-serif;
    font-size: 14px;
    font-weight: 300;
   margin-top: 10px;
   margin-bottom: 10px;
}
#chefs .chef1 img{
    width: 100%;
    border-radius: 10px;

 
}
svg{
    color: #FFFFFF;
    content: "";
    position: absolute;
    bottom: 145px;
    left: -1px;
    right: -1px;
}

#chefs .img-svg img{
    height: 350px;

}




/* /////////////////////////// */

/* service */
#service{
    background-color: #F7F7F7;
}
#service h2{
    font-family:'Poppins', sans-serif;



}

#service .text-center h2{
    font-weight: 800;
    font-size: 30px;
    font-family:'Poppins', sans-serif;
    padding-right: 20px;

}

/* sec4 contact */

#CONTACT{
    margin-top: 30px;
    padding-top: 90px;
    
}

.CONTACT-text{
    text-align: center;   
    padding-bottom: 40px;
}
.CONTACT-text p{
    color: #7F7F90  ;
    font-family: 'Lato', sans-serif;
    font-size: 14px;
    font-weight: 400;

}
.CONTACT-text h2{
    color: #212529    ;
    font-family: 'Amatic SC', sans-serif;
    font-size: 50px;
    font-weight: 400;

}
.CONTACT-text h2 span{
    color: #E2964E  ;
    font-family: 'Amatic SC', sans-serif;
    font-size: 50px;
    font-weight: 400;

}

.map iframe{
    width: 100%;
    height: 21.875rem;
    padding-top: 20px;
    margin-bottom: 20px;
}
.data-ifram{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    position: relative;
    
}


.data1{
    display: flex;
    flex-direction: row;
    background-color: #F5F5F5;
    margin-bottom: 10px;
    width:49%;
    text-align: left;
    padding: 35px;
}
.data1 i{
    display: inline-block;
    padding: 15px;
    background-color: #E2964E;
    border-radius: 50%;
    font-size: 20px;
    color: #FFFFFF;

}
.align{
    display: flex;
    flex-direction: column;
    vertical-align: -10px;
    padding-left: 10px;

}
.align h3{
    color: #7D7D7D;
    font-size: 20px;
    font-family: 'Lato', sans-serif;
    font-weight: 700;

}
.align p,a{
    color: #212529;
    font-size: 16px;
    font-family: 'Lato', sans-serif;
    font-weight:400;

}
.align span{
    color: #212529;
    font-size: 16px;
    font-family: 'Lato', sans-serif;
    font-weight:700;

}



.tow-fild{
    display: flex;
    justify-content: space-around;

}
.tow-fild input{
    width:48%;
    padding-right:10px ;
    
}
.tow-fild input{

    height: 60px;
    border: solid rgb(202, 196, 196) 2px;
}
.tree-fild{
   display:flex;
   justify-content: space-around;
    flex-direction: row;
    flex-wrap: wrap;
   


} 
.fild4{
   display:flex;
   justify-content: space-around;
    flex-direction: row;
    flex-wrap: wrap;
   


} 
 .tree-fild input{
    width: 98%;
    margin-top: 20px;
    height: 60px;
    border: solid rgb(202, 196, 196) 2px;
    
    
}
 .fild4 textarea{

    width:98%;
    margin-top: 20px;
    height: 60px;
    border: solid rgb(202, 196, 196) 2px;
    
    
}

.fild4 textarea{
    float: left;
    margin-top: 30px;
    height: 100px;
    border-radius: 5px;
    border: solid rgb(202, 196, 196) 2px;
    padding-left: 10PX;
    resize:vertical;
    font-family: 'Roboto', sans-serif;
}
.contact-btn{
    color: #FFFFFF;
    font-size: 15px;
    font-weight: 400;

   
}
.contact-btn button{
    padding: 15px 50px;
    margin-top: 20px;
    background-color: #E2964E;
    border-radius: 50px;
    border: none;
    color: #FFFFFF;
    font-size: 15px;
    font-weight: 400;
    font-family: 'Roboto', sans-serif;
    margin-bottom: 20px;


   
}

form{
    padding-top: 30px;
    margin-top: 30px;
    box-shadow:15px 15px  30px  #EEEEEE ;margin-bottom: 40px;
}

