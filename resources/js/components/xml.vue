var self=this;
            let xmlContent='';
            fetch('http://prematch.lsports.eu/OddService/GetMarkets?username=samuelmwangi729%40gmail.com&password=dfwe43&guid=86943baf-94f0-4dbb-b3c0-9538831e781f')
            .then((response)=>{
                response.text().then((xml)=>{
                    let tableGames=document.getElementById('games');
                    let parser= new DOMParser();
                    let xmlDOM= parser.parseFromString(xmlContent,'application/xml');
                    let games=xmlDOM.querySelectorAll('games');
                    games.forEach(bookXmlNode =>{
                        let row=document.createElement('tr');
                        let td=document.createElement('td');
                        td.innerText=bookXmlNode.children[0].innerHTML;
                        row.appendChild(td);
                        games.children[1].appendChild(row);
                        console.log("done")
                    });
                });
            });