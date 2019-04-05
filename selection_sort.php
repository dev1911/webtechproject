<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Selection Sort</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/selection_sort.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/default.css">
    <script src="js/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script src="https://d3js.org/d3.v5.min.js"></script>

</head>


<body>
<header>
    <?php include('header.php');?>
</header>
<nav>
    <?php include('navbar_algo.php');?>
</nav><!-- <hr> -->
<div id="main_body" class='col-sm-12 col-md-12 col-lg-12 col-xs-12'>
    <div id="left_article" class='col-lg-3 hidden-xs hidden-md hidden-sm' align="left"><?php include('left_bar_algo.php');?></div>
    

    <div id="mid_article" class='col-lg-6 col-xs-12 col-sm-12' ><article>
    <p>The Python or C++ code for selection sort is:</p>
    <ul class='nav nav-pills'>
            <li class='active'><a>Python</a></li>
            <li><a>C++</a></li>
    </ul>
    <br>
    <div class='pre-scrollable'>
        
        <pre><code></code></pre>
    </div>
    <br><br>
    <div id='layout'>
        <div class="container-fluid">
                <div class="row">
                    <div class='form-group '>
                        Number:<input type="number" class='form-control' id='number'>
                        <br>
                        <button type="button" class="btn" onclick="append()">Append</button>
                        <button type="button" class="btn" onclick="begin()">Sort</button>
                        <button type="button" class="btn" onclick="clear_array()">Clear</button>
                        <button type="button" class="btn" onclick="fill_array()">Fill array</button>
                    </div>
                </div>  
        </div>
        <h2>Visualising sorting of an array:</h2>
        <h4>Selection sort</h4>
        <div class='container-fluid'>
            <svg class="chart" height="500" width="750"/>
        </div>  
        </div>  
    </article></div>
    

   <div id="right_article" class='col-lg-3 hidden-xs hidden-md hidden-sm'>
            <?php include('right_bar_algo.php');?>
</div>
</div>
<!-- <input type="text" name="search" placeholder="Search.." class="sbar"> -->
<!-- <button type="submit" class="sbutton"><i class="fa fa-search"></i></button> -->
</body>
</html> 



<script>
    // window.onload=begin;
    var  data = [15,19,24,12,55,70,39,54,3,68,65,81,66,10,45,96,56,11,69,62,75,25];
    var input_box = document.getElementById("number");
    var s_sort_timeout;
    function append(){
        data.push(input_box.value);
        input_box.innerHTML=" ";
    }
    function fill_array() {
        data = [15,19,24,12,55,70,39,54,3,68,65,81,66,10,45,96,56,11,69,62,75,25];
    }
    function clear_array() {
        clearTimeout(s_sort_timeout);
        console.log("clearing");
        while(data.length>0){
            data.pop();
            // console.log();

        }
    }

    function begin(){
    // var data2=data;
    var i=0;
    var svg = d3.select("svg");
    console.log();
    svg.selectAll("*").remove();
    var margin=50,
        width=svg.attr("width")-margin,
        height=svg.attr("height")-margin;
    var Xscale = d3.scaleBand()
                  .domain(data.map((e,i) => i+1))
                  .range([0, width])
                  .padding(0.2);
    var Yscale=d3.scaleLinear()
                  .domain([0,d3.max(data)])
                 .range([height,0]);  
    var g=svg.append("g")
              .attr("transform","translate("+margin+","+margin+")");  
         g.append("g")
         .attr("transform", "translate(0," + height + ")")
         .call(d3.axisBottom(Xscale).tickFormat(function(d){
                    return d;
                }).ticks(data.length))
         ;

        g.append("g")
         .call(d3.axisLeft(Yscale).tickFormat(function(d){
             return d;
         }).ticks(10))
         .append("text")
         .attr("y", 6)
         .attr("dy", "0.71em")
         .attr("text-anchor", "end")
         .text("value");


        g.selectAll(".bar")
         .data(data)
         .enter().append("rect")
         .attr("class", "bar")
         .attr("x", function(d,i) { return Xscale(i+1); })
         .attr("y", function(d,i) { return Yscale(d); })
         .attr("width", Xscale.bandwidth())
         .attr("height", function(d,i) { return height-Yscale(d); });
         // data2=[10,9,8,7,6,5,4,3,2,1];
         // data3=[1,2,3,4,5,6,7,8,9,10];
         // setTimeout(function(){return 1;},1000);
        // for(var i=0;i<data.length;i++){
        //   var min=i;
        //   for(var j=i;j<data.length;j++){
        //     if(data[j]<data[i])
        //       min=j;
        //   }
        //   var temp=data[i];
        //   data[i]=data[min];
        //   data[min]=temp;
        //   update(data);
        

s_sort_timeout=setInterval(function(){check();},1000);

function check(){
    selection_sort(i);
    update(data,i);
    // if(i==data.length-1)
     // data2=data;
    i++;
    if(i>=data.length){
    // flash(-1)
    clearTimeout(s_sort_timeout);

    flash(-1);
    }
 
}

function selection_sort(i) {
    var min_index=i;
     // console.log(i,min_index)
    for(var j=i;j<data.length+1;j++){
    if(data[j]<data[min_index])
      min_index=j;
    }
    var temp=data[i];
    data[i]=data[min_index];
    data[min_index]=temp;
    console.log("Swapped"+data[i]+" with "+data[min_index])
}

function flash(i) {
    if(i==-1){
        d3.selectAll(".bar")
    .style("fill","green");    
    }
    else{
    d3.selectAll(".bar")
    .filter(function (d) {
      // console.log("here " +Yscale(d)+" "+data[i]);
      return (d==data[i+1]);
    })
    .style("fill","red");    
    d3.selectAll(".bar")
    .filter(function (d) {
      // console.log("here " +Yscale(d)+" "+data[i]);
      return (d<=data[i]);
    })
    .style("fill","orange");
    }
}

function update(data2,i){
    svg.selectAll("bars").remove();
    Xscale.domain(data2.map((e,i) => i+1)).range([0, width])
                  .padding(0.2);
    Yscale.domain([0,d3.max(data2)]);
    var bars = svg.selectAll(".bar")
                  .remove().exit()
                  .data(data2);
    bars.enter().append("rect")
                .attr("class","bar")
                .attr("x", function(d,i) { return margin+Xscale(i+1); })
                .attr("y", function(d,i) { return margin+Yscale(d); })
                .attr("width", Xscale.bandwidth())
                .attr("height", function(d,i) { return height-Yscale(d); });
    flash(i);       
         
}
    }
</script>
<script >
    $(document).ready(function(){
        $("#selection_sort_code").html('print("Python")');
    })
</script>
</html>