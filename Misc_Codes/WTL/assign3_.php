<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Assignment 2 php</title>
        <script>
            function myFunction() {
                var x;
                var site = prompt("Please enter Something", "Write Here Something");
                if (site != null) {
                    x = "Welcome at " + site + "! Have a good day";
                    document
                        .getElementById("demo")
                        .innerHTML = x;
                }
            }
        </script>
    </head>
    <body>
        <?php
            function prompt($prompt_msg){
                echo "<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>";
        
                $answer = "<script type='text/javascript'> document.write(answer); </script>";
                return($answer);
            }

            $prompt_msg = "Enter any Number";
            $number = prompt($prompt_msg);
            
            echo $number*5;
        ?>

        <script type="text/javascript">
            function prompt(msg) {
                print(msg);
                return document.write()
            }
        </script>
    </body>
</html>