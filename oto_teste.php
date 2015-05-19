
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <title>Exemplos de animação flipping com CSS</title>
        <style>

            /* simple */
            .flip-container {
                -webkit-perspective: 1000;
                -moz-perspective: 1000;
                -ms-perspective: 1000;
                perspective: 1000;

                -ms-transform: perspective(1000px);
                -moz-transform: perspective(1000px);
                -moz-transform-style: preserve-3d; 
                -ms-transform-style: preserve-3d; 

                /*border: 1px solid #ccc;*/
            }
            /* START: Accommodating for IE */
            .flip-container:hover .back, .flip-container.hover .back {
                -webkit-transform: rotateY(0deg);
                -moz-transform: rotateY(0deg);
                -o-transform: rotateY(0deg);
                -ms-transform: rotateY(0deg);
                transform: rotateY(0deg);
            }

            .flip-container:hover .front, .flip-container.hover .front {
                -webkit-transform: rotateY(180deg);
                -moz-transform: rotateY(180deg);
                -o-transform: rotateY(180deg);
                transform: rotateY(180deg);
            }

            .flip-container, .front, .back {
                width: 240px;
                height: 150px;
            }

            .flipper {
                -webkit-transition: 0.6s;
                -webkit-transform-style: preserve-3d;
                -ms-transition: 0.6s;

                -moz-transition: 0.6s;
                -moz-transform: perspective(1000px);
                -moz-transform-style: preserve-3d;
                -ms-transform-style: preserve-3d;

                transition: 0.6s;
                transform-style: preserve-3d;

                position: relative;
            }

            .front, .back {
                -webkit-backface-visibility: hidden;
                -moz-backface-visibility: hidden;
                -ms-backface-visibility: hidden;
                backface-visibility: hidden;

                -webkit-transition: 0.6s;
                -webkit-transform-style: preserve-3d;

                -moz-transition: 0.6s;
                -moz-transform-style: preserve-3d;

                -o-transition: 0.6s;
                -o-transform-style: preserve-3d;

                -ms-transition: 0.6s;
                -ms-transform-style: preserve-3d;

                transition: 0.6s;
                transform-style: preserve-3d;

                position: absolute;
                top: 0;
                left: 0;
            }

            .front {
                -webkit-transform: rotateY(0deg);
                -ms-transform: rotateY(0deg);
                background: lightgreen;
                z-index: 2;
            }

            .back {
                background: lightblue;
                -webkit-transform: rotateY(-180deg);
                -moz-transform: rotateY(-180deg);
                -o-transform: rotateY(-180deg);
                -ms-transform: rotateY(-180deg);
                transform: rotateY(-180deg);
            }


        </style>
    </head>
    <body>
        <div class="tudo">  
            <div class="box quatro">
                <div class="flip-container" style="float: left; margin-right: 20px;">
                    <div class="flipper">
                        <div class="front">
                            <h3>FRENTE</h3>
                        </div>
                        <div class="back">
                            <h3>VERSO</h3>
                        </div>
                    </div>
                </div>
                <div class="flip-container" style="float: left;">
                    <div class="flipper">
                        <div class="front">
                            <h3>FRENTE</h3>
                        </div>
                        <div class="back">
                            <h3>VERSO</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>