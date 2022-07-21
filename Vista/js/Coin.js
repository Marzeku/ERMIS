$('h3').css({color: 'white', background: 'black'});

var X = document.getElementById('Tabla');
X.addEventListener("click", Tabla);

function Tabla()
{
    N = 0
	  
	var Valor = document.querySelector('#Valor').value;
    var T_Moneda1 = document.querySelector('#T_Moneda1').value;
	var Total = document.querySelector('#Total').value;
    var T_Moneda2 = document.querySelector('#T_Moneda2').value;
    
    function Datos(Valor, T_Moneda1, Total, T_Moneda2)
    {
        this.Valor = Valor;
        this.T_Moneda1 = T_Moneda1;
        this.Total = Total;
        this.T_Moneda2 = T_Moneda2;
    }
    
    let D = new Datos(Valor, T_Moneda1, Total, T_Moneda2);
	
	var ID = 'row' + N;
	
	var Reg = "<tr style='background-color: #5252ec;' id = " + ID + "></td><td><center><b><font color = 'white'>" + D.Valor + "</font></b></center></td><td><center><b><font color = 'white'>" + D.T_Moneda1 + "</font></b></center></td><td><center><b><font color = 'white'>" + D.Total + "</font></b></center></td><td><center><b><font color = 'white'>" + D.T_Moneda2 + "</font></b></center></td></tr>";
	
    $("#Registros").append(Reg);
  
    N++;
}

var Am1 = document.getElementById('Aum1');
Am1.addEventListener("click", Aum1);

function Aum1()
{   
    $('#Texto1').addClass('display-4');
}

var Am2 = document.getElementById('Aum2');
Am2.addEventListener("click", Aum2);

function Aum2()
{   
    $('#Texto2').addClass('display-4');
}

var Am3 = document.getElementById('Aum3');
Am3.addEventListener("click", Aum3);

function Aum3()
{   
    $('#Texto3').addClass('display-4');
}

var Am4 = document.getElementById('Aum4');
Am4.addEventListener("click", Aum4);

function Aum4()
{   
    $('#Texto4').addClass('display-4');
}

var Am5 = document.getElementById('Aum5');
Am5.addEventListener("click", Aum5);

function Aum5()
{   
    $('#Texto5').addClass('display-4');
}

var Am6 = document.getElementById('Aum6');
Am6.addEventListener("click", Aum6);

function Aum6()
{   
    $('#Texto6').addClass('display-4');
}

var Am7 = document.getElementById('Aum7');
Am7.addEventListener("click", Aum7);

function Aum7()
{   
    $('#Texto7').addClass('display-4');
}

var Dm1 = document.getElementById('Dim1');
Dm1.addEventListener("click", Dim1);

function Dim1()
{   
    $('#Texto1').removeClass('display-4');
}

var Dm2 = document.getElementById('Dim2');
Dm2.addEventListener("click", Dim2);

function Dim2()
{   
    $('#Texto2').removeClass('display-4');
}

var Dm3 = document.getElementById('Dim3');
Dm3.addEventListener("click", Dim3);

function Dim3()
{   
    $('#Texto3').removeClass('display-4');
}

var Dm4 = document.getElementById('Dim4');
Dm4.addEventListener("click", Dim4);

function Dim4()
{   
    $('#Texto4').removeClass('display-4');
}

var Dm5 = document.getElementById('Dim5');
Dm5.addEventListener("click", Dim5);

function Dim5()
{   
    $('#Texto5').removeClass('display-4');
}

var Dm6 = document.getElementById('Dim6');
Dm6.addEventListener("click", Dim6);

function Dim6()
{   
    $('#Texto6').removeClass('display-4');
}

var Dm7 = document.getElementById('Dim7');
Dm7.addEventListener("click", Dim7);

function Dim7()
{   
    $('#Texto7').removeClass('display-4');
}