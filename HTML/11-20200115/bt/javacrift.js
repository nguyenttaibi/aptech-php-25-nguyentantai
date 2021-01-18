function givayta() {
 var sanpham =[
    ['Iphone', 'IP8',10],
    ['Iphone', 'IPX',15],
    ['Iphone', 'IPXS',19],
    ['Iphone', 'IP11',20],
    ['Iphone', 'IP12',30],
 ];

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
function addTable() {
  var table = document.createElement('table');
  table.innerHTML = "<tr><td>111111</td></tr>";
  document.getElementById('addtable').appendChild(table);
}
