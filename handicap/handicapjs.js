function change()
{
console.log("hello");
        var upload=document.getElementById('uploadeddiv');
        var tablediv=document.createElement('div');
        tablediv.style.borderTop="3px solid white";
        tablediv.style.borderBottom="3px solid white";
        upload.appendChild(tablediv);
    
        var table=document.createElement('table');
        table.setAttribute("class","tab");
        table.style.cellSpacing="10px";
        table.style.cellPading="10px";
        table.style.width="100%";
    
        tr1=document.createElement('tr');
    
        td1=document.createElement('td');
        l1=document.createTextNode("Name:");
        
        td1.appendChild(l1);
        
        var name1=<?php echo $hname; ?>
        s1=document.createTextNode(name1);
        td1.appendChild(s1);
        tr1.appendChild(td1);
    
        td2=document.createElement('td');
        l2=document.createTextNode("Exam Center:");
        td2.appendChild(l2);
        var exam_center= <?php echo $ecenter; ?>
        s2=document.createTextNode(exam_center);
        td2.appendChild(s2);
    
        tr1.appendChild(td2);
    
        table.appendChild(tr1);
    
        tr2=document.createElement('tr');
    
        td3=document.createElement('td');
        l3=document.createTextNode(" Exam Name:");
        td3.appendChild(l3);
        var exam_name=<?php echo $ename; ?>
        s3=document.createTextNode(exam_name);
        td3.appendChild(s3);
        tr2.appendChild(td3);
    
        td4=document.createElement('td');
        l4=document.createTextNode(" Exam Date:");
        td4.appendChild(l4);
        var exam_date1= <?php echo $edate; ?>
        s4=document.createTextNode(exam_date1);
        td4.appendChild(s4);
        tr2.appendChild(td4);
        table.appendChild(tr2);
    
        tr3=document.createElement('tr');
    
        td5=document.createElement('td');
        l5=document.createTextNode(" Eligibility Criteria:");
        td5.appendChild(l5);
        var eligibility_criteria=<?php echo $ecriteria; ?>
        s5=document.createTextNode(eligibility_criteria);
        td5.appendChild(s5);
        tr3.appendChild(td5);
        table.appendChild(tr3);
       
       
        tablediv.appendChild(table);
        var bt1=document.createElement('button');
        bt1.setAttribute("style","height:40px; width:120px; position: relative; bottom:10px; background-color:rgb(226, 51, 48) ; border-color:white; font-size: 20px;color:white; ");
        bt1.innerText="pending";
        tablediv.appendChild(bt1);
}
