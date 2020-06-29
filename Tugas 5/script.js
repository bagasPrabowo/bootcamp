        var items = [
            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
        ]

        document.getElementById("listBarang").innerHTML = dataHandling(items);

        
        function dataHandling(items){
            var data="";
            for (var i = 0; i < items.length; i++) {
                    data+= '<div class="card" id="'+items[i][0]+'">'
                        +'<img src="'+items[i][4]+'" class="card-img-top" alt="'+items[i][1]+'" style="max-height: 150px; object-fit: cover">'
                        +'<div class="card-body">'
                        +   '<h5 class="card-title" id="itemName['+i+']">'+items[i][1]+'</h5>'
                        +   '<p class="card-text" id="itemDesc['+i+']">'+items[i][3]+'</p>'
                        +   '<p class="card-text">Rp. '+items[i][2]+'</p>'
                        +   '<a href="#" class="btn btn-primary " id="addCart">Tambahkan ke keranjang</a>'
                        +'</div></div>';
                    
            }
        return data;
        }
        var form = document.getElementById('formItem');
        
        form.addEventListener("submit", function(e) {
            e.preventDefault();
            var str = document.getElementById("keyword").value;
            
            for (var i = 0; i < items.length; i++) {
                var item = document.getElementById("itemName["+i+"]").innerHTML;
                if(item.toUpperCase().includes(str.toUpperCase())){
                    var card = document.getElementById(items[i][0]);
                    card.style.display = "block";
                }else{
                    var card = document.getElementById(items[i][0]);
                    card.style.display = "none";
                }
            }
        });

