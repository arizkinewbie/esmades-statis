<div class="container-fluid py-5" style="margin-top: 100px; padding-left: 200px;">
   <div class="row justify-content-center">
      <div class="col-md-12 text-center">
         <h2>Struktur Organisasi</h2>
         <p class="mb-4">Diagram struktur organisasi Desa Kami.</p>
      </div>
   </div>
   <div class="row justify-content-center">
      <div class="col-lg-10">
         <div class="card">
            <div class="card-body">
               <div id="chartDiv1" style="height: 600px;"></div>
            </div>
         </div>
      </div>
   </div>
</div>

<script src="https://code.jscharting.com/latest/jscharting.js"></script>
<script>
   // JS 
   var chart = JSC.chart('chartDiv1', {
      debug: false,
      type: 'organizational',

      /* These options will apply to all annotations including point nodes and breadcrumbs. */
      defaultAnnotation: {
         padding: [5, 10],
         margin: [15, 5]
      },
      defaultTooltip_enabled: false,

      defaultSeries: {
         color: '#0ab39c',
         defaultPoint: {
            label_maxWidth: 90,
            /* Default line styling for connector lines */
            connectorLine: {
               /* No radius on first angle, then 5px on the second angle. */
               radius: [0, 5],
               color: '#424242',
               width: 1,
               caps: {
                  end: {
                     type: 'arrow',
                     size: 6
                  }
               }
            }
         }
      },
      series: [{
         points: [{
               label_text: '<span><img src="https://e-smades.test/dist/assets/images/users/avatar-3.jpg" alt="" style="width: 40px; height: 40px; border-radius: 50%"><br>Kepala Desa<br>H. Irwanudin</span>',
               id: 'PM',
            },
            {
               x: 'Deputy Project Manager',
               id: 'DPM',
               parent: 'PM'
            },
            {
               x: 'System Engineering',
               id: 'SE',
               parent: 'DPM'
            },
            {
               x: 'Independent Test Group',
               id: 'ITG',
               parent: 'DPM'
            },
            {
               x: 'Project Technical Lead',
               id: 'PTL',
               parent: 'DPM'
            },
            {
               x: 'Quality Assurance',
               id: 'QA',
               parent: 'DPM'
            },
            {
               x: 'Configuration Manager',
               id: 'CM',
               parent: 'DPM'
            },

            {
               x: 'S/W Subproject Manager 1',
               id: 'SM1',
               parent: 'PTL'
            },

            {
               x: 'S/W Subproject Manager 2',
               id: 'SM2',
               parent: 'PTL'
            }
         ]
      }]
   });
</script>