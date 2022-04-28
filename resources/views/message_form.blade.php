<!DOCTYPE html>
<html>
    <head>
        <title> Broadcaster </title>
    </head>
    <body>
        <div style="text-align: center; padding: 10%">
            <form method ='POST' action ='/send'>
                @csrf
                <div> 
                    <div class="control">
                        <input type="text" name="message" id = "message">
                        <br>
                    </div>
                </div>
                <br>
            
                <div>
                    <div class="control">
                        <button type="submit">confirm</button>
                        <br>
                        <br>

                    </div>
                </div>
            
            </form>
        </div>        
    </body>
</html>


