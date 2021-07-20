<?php
       
    // We are storing the value of a
    if(isset($_REQUEST['a']))
        $a = $_REQUEST['a'];
    else
        $a = 0;
    
    /* we are storing value of b */
    if(isset($_REQUEST['b']))
        $b = $_REQUEST['b'];
    else
        $b = 0;

    /* we are storing value of op */
    if(isset($_REQUEST['op']))
        $op = $_REQUEST['op'];
    else
        $op = 0;

    $result = 0;
    if($op!="0"){
        if($op=='add')
            $result = $a + $b;
        else if($op=='sub')
            $result = $a - $b;
        else if($op=='mul')
            $result = $a * $b;
        else if($op == 'div'){
            if($b!=0)
            $result = $a / $b;
            else
            $result = "Error: Cannot Divide by Zero";
        }
        else if($op=='perc')
            $result = $a % $b;
    }
    

?>

<!doctype html>
<html>
    <head>
        <title>Calculator App</title>
        <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
        <link href="css/style.css" type="text/css" rel="stylesheet">
    </head>
    <body class="bg-light">
        
        <div class="container">
            <div class="p-5 mt-5 bg-warning border border-success">
                <h1> Calculator </h1>
                <form method="get" action="index.php">
                  <div class="form-group">
                    <label >Enter Value of A</label>
                    <input type="text" name="a" value="<?php echo $a;?>" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label >Enter Value of B</label>
                    <input type="text" name="b" value="<?php echo $b;?>" class="form-control"  >
                  </div>
                  <div class="form-group">
                     <label >Example select</label>
                    <select class="form-control" name="op">
                      <option value="add">Add</option>
                      <option value="sub">Subtract</option>
                      <option value="mul">Multiply</option>
                      <option value="div">Divide</option>
                        <option value="perc">Remainder</option>
                    </select>
                    </div>
                    
                    <div class="bg-light border p-3 mb-3">
                        <h4> Result</h4>
                        <h1><?php echo $result; ?></h1>
                    </div>
                  
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        
    
    </body>

</html>