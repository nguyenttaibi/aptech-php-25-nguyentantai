function giVayTa() {
  var sanpham =[
    ['Iphone', 'IP8',10],
    ['Iphone', 'IPX',15],
    ['Iphone', 'IPXS',19],
    ['Iphone', 'IP11',20],
    ['Iphone', 'IP12',30],
 ];
  var table = document.createElement('table');
  table.innerHTML = "<tr><th>#</th><th>Ten</th><th>Loai</th><th>gia</th></tr>";
  document.getElementById('addtable').appendChild(table);
 var text= '' ;
    for(var i = 0;i < sanpham.length ; i++){ 
    text +='<tr>';
    text +='<td>'+(i+1)+"</td>"
      for(var j = 0 ;j < sanpham[i].length ; j++)
        {
            text+='<td>'+sanpham[i][j]+'</td>';   
        }
        text+='</tr>';
    }
    document.getElementById('nhapbang').innerHTML = text ;
}
// function giVayTa() {
//   var table = document.createElement('table');
//   table.innerHTML = "<tr><th>#</th><th>Ten</th><th>Loai</th><th>gia</th></tr>";
//   document.getElementById('addtable').appendChild(table);
// }

function inRa(){
  var sanpham =[
    ['Iphone', 'IP8',10],
    ['Iphone', 'IPX',15],
    ['Iphone', 'IPXS',19],
    ['Iphone', 'IP11',20],
    ['Iphone', 'IP12',30],
  ];
    var tableE = document.getElementById('table');
    
      for (var i =0; i <sanpham.length; i++ ) {
      var tr = document.createElement('tr');
        for(var j=0; j<sanpham[i].length; j++){
          var td = document.createElement('td')

            td.innerHTML= td;
            td.innerHTML= sanpham[i][j];
            tr.appendChild(td);
        }
        tableE.appendChild(tr);
    }
}
