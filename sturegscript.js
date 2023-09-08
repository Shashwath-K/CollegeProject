/*var pre1,pre2;
var i=0;
var arrmet=['Kannada','English','Hindi','Maths','Science','Social Studies'];
function prefill(){
    pre1=document.getElementById(precourse1).option.value;
    if(pre1=='10th'){
            for(i=arrmet[0];i<arrmet[n];i++){
                 document.getElementById(precourse2).option.value=arrmetric
                 document.getElementById(precourse2).option.text=SSLC;
            }
        }
}
let btnPopulate=document.getElementById('precourse1');
let select=document.getElementById('precourse2');
function prefill(){
var arrmet=['SSLC','CBSE','ICSE','Other'];
var arrpu=['Karnataka-PU','CBSE 12th','Other'];
var arroth=['ITI','Other'];
if(btnPopulate.value=='10th'){
btnPopulate.addEventListener('load',() =>{
    let options=arrmet.map(arrme =>'<option value=${arrme.toLowerCase()}>$arrme</option>').join('\n');
    select.innerHTML=options;
});
}
}*/
function prefill(pre1,slt1){
    pre1=document.getElementById(pre1);
    slt1=document.getElementById(slt1);

    slt1.innerHTML="";
    if(pre1.value=="10th")
    {
        var optionArray=['sslc|SSLC','cbse|CBSE','icse|ICSE','other|Other'];
    }
    else if(pre1.value=="PUC")
    {
        var optionArray=['karnataka-pupcmb|Karnataka-PU[PCMB]','karnataka-pupcmc|Karnataka-PU[PCMC]','karnataka-pucomc|Karnataka-PU[EBAC]','icse|ICSE','cbse12sci|CBSE 12th[Science]','cbse12com|CBSE 12th[COM}','other|Other'];
    }
    else if(pre1.value=="other")
    {
        var optionArray=['iti|ITI','other|Other'];
    }
    for(var option in optionArray)
    {
        var pair=optionArray[option].split("|");
        var newoption=document.createElement("option");

        newoption.value=pair[0];
        newoption.innerHTML=pair[1];
        slt1.options.add(newoption);
    }
    if(pre1.value=="10th" && slt1.value=="sslc")
    {
            document.getElementById('c1').value="Kannada";
            document.getElementById('c2').value="English";
            document.getElementById('c3').value="Hindi";
            document.getElementById('c4').value="Science";
            document.getElementById('c5').value="Mathematics";
            document.getElementById('c6').value="Social Studies";
    }
}
