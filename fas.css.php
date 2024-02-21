    <style type="text/css">
        

 *{
              box-sizing: border-box;
            }
            :root{
                --btn-width-100: 100px;
            }
            body{
                margin: 0;
                padding: 0;
            }
            nav{
                margin: 0;
                padding: 0;
            }
            nav ul {
                margin: 0;
                padding: 8px 15px;
                list-style: none;
                display: flex;
                box-shadow: 0 1px 8px rgba(0,0,0,0.3);
            }
            nav ul li {
                padding: 3px;
            }
            nav ul li a{
                display: inline-block;
                text-decoration: none;
            }
            nav ul li #fb{
                background: #0B84ED;
                color: #fff;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 2rem;
            }
            nav ul li #search_btn{
                border: none;
                outline: none;
                background: rgba(0, 0, 0, 0.068);
                padding: 8px;
                color: #888;
                width: 40px;
                height: 40px;
                font-size: 1rem;
                border-radius: 50%;
                cursor: pointer;
                
            }
            nav ul li#space1{
                flex: 1;
            }
            nav ul li#space2{
                flex: 2;
            }
            nav ul li a{
                height: 40px;
                width: var(--btn-width-100);
                font-size: 1.5rem;
                display: flex;
                justify-content: center;
                align-items: center;
                color: rgb(158, 158, 158);
                transition: .5s;

            }
            nav ul li #btn_plus,
            nav ul li #btn_msg,
            nav ul li #btn_bell,
            nav ul li #btn_profile{
                height: 40px;
                width: 40px;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 1rem;
                color: #444;
                background: rgba(0, 0, 0, 0.068);
                border: none;
                outline: none;
                border-radius: 50%;
                cursor: pointer;
            }

            
            nav ul li:hover #home, 
            nav ul li:hover #group, 
            nav ul li:hover #tv, 
            nav ul li:hover #friend{
                background: rgba(0, 0, 0, 0.138);
                color: #444;
                border-radius: 5px;
           
            } 
        

            
            .active{
                color: #0B84ED!important; 
            }

            .tooltip{
                position: relative;
            }
            .tooltip::after{
                content: attr(data-tooltip);
                height: 30px;
                background: rgba(0,0,0,0.4);
                color: #fff;
                font-size: 1rem;
                text-align: center;
                position: absolute;
                bottom: -150%;
                padding: 5px 12px;
                line-height: 30px;
                border-radius: 3px;
                opacity: 0;
                transition: .3s;
                pointer-events: none;
                user-select: none;
            }
            .tooltip:hover::after{
                opacity: 1;
            }
            nav ul li #btn_profile::after{
               margin-left: -20px;
            }


            @media  screen and (max-width: 700px){
                nav ul li#space1,
                nav ul li#space2{
                    display: none;
                }
                nav ul{
                    min-width: 600px;
                    padding: 8px 12px;
                  justify-content: space-between;
                }
                :root{
                    --btn-width-100: 60px;
                }
            }


    </style>