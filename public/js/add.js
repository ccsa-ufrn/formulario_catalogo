var row1 = 0;
function add(){
   
    var input3 = document.getElementById('inputExp3').value;
    var input1 = document.getElementById('inputExpLocal').value;
    var input2 = document.getElementById('inputExpDesde').value;
    var final = input1 + " desde " + input2 + " Descrição: " + input3;
    if(input3 != "")
    {
        
    var node=document.createElement("li");
    	node.setAttribute("class", "list-group-item");
    var textnode=document.createTextNode(final);
        node.appendChild(textnode);
        console.log(row1);
        node.setAttribute("id","linha"+row1);
        node.setAttribute("value", final);

    document.getElementById('list1').appendChild(node);
    
    console.log(document.getElementById('linha'+row1));

 	var desde=document.createElement("input");
        desde.setAttribute("type", "hidden");
        desde.setAttribute("id", "desde"+row1);
        desde.setAttribute("name", "experiencia_ano[]");
        desde.setAttribute("value", input2)
     document.getElementById('linha'+row1).appendChild(desde);
     console.log(document.getElementById('desde'+row1).value);

     var local=document.createElement("input");
        local.setAttribute("type", "hidden");
        local.setAttribute("id", "tipo"+row1);
        local.setAttribute("name", "experiencia_instituicao[]");
        local.setAttribute("value", input1)
     document.getElementById('linha'+row1).appendChild(local);
     console.log(document.getElementById('tipo'+row1).value);

     var curso=document.createElement("input");
        curso.setAttribute("type", "hidden");
        curso.setAttribute("id", "descricao"+row1);
        curso.setAttribute("value", input3)
        curso.setAttribute("name", "experiencia_atividades[]");
     document.getElementById('linha'+row1).appendChild(curso);
     console.log(document.getElementById('descricao'+row1).value);

    var removeTask = document.createElement('input');
        removeTask.setAttribute('type', 'button');
        removeTask.setAttribute("value", "Remove");
        removeTask.setAttribute("class", "btn btn-danger btn-sm");
        removeTask.setAttribute("id", "removeButton1");
        removeTask.setAttribute("onClick", "deleterow1("+ row1 +");");

    node.appendChild(removeTask);
        row1++;
    } 
    else
    {
        alert("Please insert a value!");
    }
    
}
function deleterow1(ID)
{
    document.getElementById('linha'+ID).remove();
}
