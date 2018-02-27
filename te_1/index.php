
<html>
    <link href="css/index.css" rel="stylesheet" type="text/css">   
    <script src="js/jquery.min.js"></script>
    <script src="js/tableExport.js"></script> 
    <script src="js/jquery.base64.js"></script>   
<!--  <script type="text/javascript" src="js/FileSaver/FileSaver.min.js"></script>
  <script type="text/javascript" src="js/jspdf.min.js"></script>
  <script type="text/javascript" src="js/jspdf.plugin.autotable.js"></script>-->
    
    <script type="text/javascript" src="js/pdfmake.min.js"></script>
    <script type="text/javascript" src="js/html2canvas.min.js"></script>
    <script type="text/javascript" src="js/mirza_fonts.js"></script>

    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p class="printer-text">可执行操作:</p>
        <button id="printer" onclick="$('#table').tableExport({type:'png',escape:'false'});">打印菜单</button>
        <div class="content">
            <table id="table"  word-break="break-all" align="center" width="80%"  border=1 bordercolor="#00ff99">
                <tbody>
                    <tr>
                        <th width='10%' word-break='break-all' height="40px">分类</th>
                        <th>菜品</th>
                        <th width="15%">数量</th>
                        <th width='10%'word-break='break-all'>分类</th>
                        <th>菜品</th>
                        <th width="15%">数量</th>
                    </tr>
                    <tr>
                        <td rowspan="16">霸道<br>推荐<br>必点</td>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td rowspan="16">荤菜</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                       <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                        <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                      <tr>
                        <td rowspan="16">霸道<br>推荐<br>必点</td>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td rowspan="16">荤菜</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                       <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                        <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>霸道空运绿色毛肚</td> 
                        <td>45</td>
                        <td>贡菜品丸子</td>
                        <td>45</td>
                    </tr>
                    
                </tbody>
                
            </table>        
        </div>

       
    </body>
</html>
<script>
//    $("#printer").click(function(){
//        console.log("2");
//        $('#table').tableExport({
//
//        type:'excel',
//
//        escape:'false',
//
//        fileName: 'menu_table'
//
//        });
//
//    });


//function doExport() {
////            data = $.base(data:"已经编码过后的base64",type:1,unicode:true);
//          $('#table').tableExport({type:'pdf',
//                                       jspdf: {orientation: 'p',
//                                               margins: {right: 20, left: 20, top: 30, bottom: 30},
//                                               autotable: {styles: {fillColor: 'inherit',
//                                                                    textColor: 'inherit',
//                                                                    fontStyle: 'inherit'},
//                                                           tableWidth: 'wrap'}}});
//      }
</script>