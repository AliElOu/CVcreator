$(document).ready(function(){
    $('#downloadPdf').on('click', function(){
      // Options pour la conversion en PDF
      var options = {
        margin: [0,10,10,10],
        filename: 'contenu.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
      };
  
      // Sélection de l'élément à convertir en PDF
      var content = document.getElementById('partie');
  
      // Conversion de l'élément en PDF
      html2pdf().from(content).set(options).save();
    });
  });