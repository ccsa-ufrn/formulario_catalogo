var row1 = 0;
function add(){
   
    var input3 = document.getElementById('inputExp3').value;
    var final =  input3;
    if(input3 != "")
    {
        
    var node=document.createElement("li");
    var textnode=document.createTextNode(final);
        node.appendChild(textnode);
        console.log(row1);
        node.setAttribute("id","contentP"+row1);
        node.setAttribute("value", final);

    document.getElementById('list1').appendChild(node);
    
    console.log(document.getElementById('contentP'+row1));

 

     var curso=document.createElement("input");
        curso.setAttribute("type", "hidden");
        curso.setAttribute("id", "descricao"+row1);
        curso.setAttribute("value", input3)
        curso.setAttribute("name", "descricao[]");
     document.getElementById('contentP'+row1).appendChild(curso);
     console.log(document.getElementById('descricao'+row1).value);

    var removeTask = document.createElement('input');
        removeTask.setAttribute('type', 'button');
        removeTask.setAttribute("value", "Remove");
        removeTask.setAttribute("class", "btn btn-primary btn-sm");
        removeTask.setAttribute("id", "removeButton1");
        removeTask.setAttribute("onClick", "deleterow("+ row1 +");");

    node.appendChild(removeTask);
        row1++;
    } 
    else
    {
        alert("Please insert a value!");
    }
    
}
