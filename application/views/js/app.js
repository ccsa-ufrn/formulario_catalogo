var row = 0;
function addText(){
    var input = document.getElementById('inputFormacao').value;
    var input1 = document.getElementById('inputFormacao1').value;
    var input2 = document.getElementById('inputFormacao2').value;
    var input3 = document.getElementById('inputFormacao3').value;
    var final = input + " a " + input1 + "  " + input2 + " em " + input3;
    if(input != "")
    {
        
    var node=document.createElement("li");
    var textnode=document.createTextNode(final);
        node.appendChild(textnode);
        console.log(row);
        node.setAttribute("id","contentP"+row);
        node.setAttribute("value", final);

    document.getElementById('list').appendChild(node);
    
    console.log(document.getElementById('contentP'+row));

    var dataInicio=document.createElement("input");
        dataInicio.setAttribute("type", "hidden");
        dataInicio.setAttribute("id", "dataInicio"+row);
        dataInicio.setAttribute("name", "dataInicio");
        dataInicio.setAttribute("value", input)
     document.getElementById('contentP'+row).appendChild(dataInicio);
     console.log(document.getElementById('dataInicio'+row).value);

     var dataFim=document.createElement("input");
        dataFim.setAttribute("type", "hidden");
        dataFim.setAttribute("id", "dataFim"+row);
        dataFim.setAttribute("name", "dataFim");
        dataFim.setAttribute("value", input1)
     document.getElementById('contentP'+row).appendChild(dataFim);
     console.log(document.getElementById('dataFim'+row).value);

     var tipo=document.createElement("input");
        tipo.setAttribute("type", "hidden");
        tipo.setAttribute("id", "tipo"+row);
        tipo.setAttribute("name", "tipo");
        tipo.setAttribute("value", input2)
     document.getElementById('contentP'+row).appendChild(tipo);
     console.log(document.getElementById('tipo'+row).value);

     var curso=document.createElement("input");
        curso.setAttribute("type", "hidden");
        curso.setAttribute("id", "curso"+row);
        curso.setAttribute("value", input3)
        curso.setAttribute("name", "curso[]");
     document.getElementById('contentP'+row).appendChild(curso);
     console.log(document.getElementById('curso'+row).value);

    var removeTask = document.createElement('input');
        removeTask.setAttribute('type', 'button');
        removeTask.setAttribute("value", "Remove");
        removeTask.setAttribute("class", "btn btn-primary btn-sm");
        removeTask.setAttribute("id", "removeButton");
        removeTask.setAttribute("onClick", "deleterow("+ row +");");

    node.appendChild(removeTask);
        row++;
    } 
    else
    {
        alert("Please insert a value!");
    }
    
}
function deleterow(ID)
{
    document.getElementById('contentP'+ID).remove();
}