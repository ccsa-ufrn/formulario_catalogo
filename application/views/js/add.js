var row1 = 0;
function add(){
    var input = document.getElementById('inputExp').value;
    var input1 = document.getElementById('inputExp1').value;
    var input2 = document.getElementById('inputExp2').value;
    var input3 = document.getElementById('inputExp3').value;
    var final = input + " a " + input1 + "  " + input2 + " em " + input3;
    if(input != "")
    {
        
    var node=document.createElement("li");
    var textnode=document.createTextNode(final);
        node.appendChild(textnode);
        console.log(row1);
        node.setAttribute("id","contentP"+row1);
        node.setAttribute("value", final);

    document.getElementById('list1').appendChild(node);
    
    console.log(document.getElementById('contentP'+row1));

    var dataInicio=document.createElement("input");
        dataInicio.setAttribute("type", "hidden");
        dataInicio.setAttribute("id", "dataInicioExp"+row1);
        dataInicio.setAttribute("name", "dataInicioExp");
        dataInicio.setAttribute("value", input)
     document.getElementById('contentP'+row1).appendChild(dataInicio);
     console.log(document.getElementById('dataInicioExp'+row1).value);

     var dataFim=document.createElement("input");
        dataFim.setAttribute("type", "hidden");
        dataFim.setAttribute("id", "dataFimExp"+row1);
        dataFim.setAttribute("name", "dataFimExp");
        dataFim.setAttribute("value", input1)
     document.getElementById('contentP'+row1).appendChild(dataFim);
     console.log(document.getElementById('dataFimExp'+row1).value);

     var tipo=document.createElement("input");
        tipo.setAttribute("type", "hidden");
        tipo.setAttribute("id", "tipoExp"+row1);
        tipo.setAttribute("name", "tipoExp");
        tipo.setAttribute("value", input2)
     document.getElementById('contentP'+row1).appendChild(tipo);
     console.log(document.getElementById('tipoExp'+row1).value);

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
