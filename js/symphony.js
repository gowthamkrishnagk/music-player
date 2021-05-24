

  

         // NOW I CLICK album-poster TO GET CURRENT SONG ID
         $(".album-poster").on('click', function(e){
           var dataSwitchId = $(this).attr('data-switch');
           //console.log(dataSwitchId);

           // and now i use aplayer switch function see
           ap.list.switch(dataSwitchId); //this is static id but i use dynamic

           // aplayer play function
           // when i click any song to play
           ap.play();

           // click to slideUp player see
           $("#aplayer").addClass('showPlayer');
         });

         const ap = new APlayer({
             container: document.getElementById('aplayer'),
             listFolded: true,
             audio: [
             {
              name: 'Dharala Prabhu',
              artist: 'Anirudh Ravichandran',
              url: 'Dharala Prabhu Title Track-Masstamilan.in.mp3',
              cover: 'https://daddykool.com/Photo/418462581414'
             },
           {
                 name: 'Veyyon silli',  // SONG NAME
                 artist: 'G.V.Prakash , Harish Sivaramakrishnan', //ARTIST NAME
                 url: 'Veyyon Silli-Masstamilan.in.mp3', // PATH NAME AND SONG URL
                 cover: 'https://a10.gaanacdn.com/gn_img/song/kGxbnw0Ky4/xbneEX6aWy/size_xxl_1581596667.webp' // COVER IMAGE
             },
           {
             name: 'Chellamma',
             artist: 'Anirudh Ravichandran',
             url: 'Chellamma.mp3',
             cover: 'https://a10.gaanacdn.com/images/song/56/30978756/crop_480x480_1594902321.jpg',
           },
           {
             name: 'Breakup Song',
             artist: 'Hip Hop Tamizha',
             url: 'Breakup Song-Masstamilan.In.mp3',
             cover: 'https://pbs.twimg.com/media/ELKVWHbVUAIS3ij.jpg',
           },
           {
            name: 'Bekhayali',
            artist: 'Sachet Tandon',
            url: 'Bekhayali - Kabir Singh 128 Kbps.mp3',
            cover: 'https://sm.askmen.com/askmen_in/photo/default/article-355-thumbnail_q16e.jpg',
          },
          {
            name: 'Tum hi Aana',
            artist: 'Jubin Nautiyal',
            url: 'Tum Hi Aana - Marjaavaan 128 Kbps.mp3',
            cover: 'https://m.media-amazon.com/images/M/MV5BY2Y1M2Y0YWEtN2FlNS00ODkwLWJhN2ItNTA0YTkzZWI4NjJhXkEyXkFqcGdeQXVyMTA5NzIyMDY5._V1_.jpg',
          },
          {
            name: 'First class',
            artist: 'Arjith Singh,Neeti Mohan',
            url: 'First-Class-(Kalank)-Neeti-Mohan,Ajit-Singh.mp3',
            cover: 'https://ilidawaves.weebly.com/uploads/1/2/3/9/123934915/570965492.jpg',
          },
          {
            name: 'Tum hi ho',
            artist: 'Arjith Singh',
            url: 'Tum Hi Ho-(Mr-Jat.in).mp3',
            cover: 'https://i.kfs.io/album/global/67931450,0v1/fit/500x500.jpg',
          },
          {
            name: 'Inthena Inthena',
            artist: 'Sid Sriram',
            url: 'Inthena Inthena (Naasongs.me).mp3',
            cover: 'https://a10.gaanacdn.com/images/song/44/25488344/crop_480x480_1549985145.jpg',
          },
          
          
          {
            name: 'Maate Vinadhuga',
            artist: 'Sid Sriram',
            url: 'Maate Vinadhuga - SenSongsMp3.Co.mp3',
            cover: 'https://a10.gaanacdn.com/images/playlists/66/34134366/crop_480x480_1562151729_34134366.jpg',
          },
          {
            name: 'Top Lesi Poddi',
            artist: 'Sagar,Geetha Madhuri',
            url: 'Top Lesi Poddi-SenSongsMp3.Com.mp3',
            cover: 'topulesopodi.PNG',
          },
          {
            name: 'Kadalalle',
            artist: 'Sid Sriram',
            url: 'Kadalalle - SenSongsMp3.Co.mp3',
            cover: 'kadalale.PNG',
          },
          // malayalam
          {
            name: 'Pularikalo',
            artist: 'Shakthisree Gopalan,Muhammed Maqbool Mansoor',
            url: 'Pularikalo [Kuttyweb.xyz].mp3',
            cover: 'https://a10.gaanacdn.com/images/albums/51/1573751/crop_480x480_1573751.jpg',
          },
          {
            name: 'Uyire',
            artist: 'Sid Sriram',
            url: 'Uyire-Mallumusic.info.mp3',
            cover: 'https://a10.gaanacdn.com/gn_img/albums/4Z9bqZoKyQ/Z9bqyZ21by/size_xxl_1580214908.webp',
          },
          {
            name: 'Jeevamshamayi',
            artist: 'K S Harisankar, Shreya Ghoshal',
            url: 'Jeevamshamayi [Kuttyweb.xyz].mp3',
            cover: 'https://a10.gaanacdn.com/images/song/75/23346975/crop_480x480_1523367355.jpg',
          },
          {
            name: 'Malare',
            artist: 'Vijay Yesudas',
            url: 'Malare [Kuttyweb.xyz].mp3',
            cover: 'https://media-images.mio.to/by_artist/V/Vijay%20Yesudas/Malare%20%28From%20Premam%29%20%282015%29/Art-350.jpg',
          },
          // english
          {
            name: 'Alone',
            artist: 'Alan Walker',
            url: 'Alan Walker - Alone.mp3',
            cover: 'https://a10.gaanacdn.com/images/albums/54/1854954/crop_480x480_1854954.jpg',
          },
          {
            name: 'Senorita',
            artist: 'Camila Cabello, Shawn Mendes',
            url: 'Shawn Mendes, Camila Cabello - Señorita.mp3',
            cover: 'https://images-na.ssl-images-amazon.com/images/I/41neFN6j2PL.jpg',
          },
          {
            name: 'Let me down slowly',
            artist: 'Alec Benjamin',
            url: 'Alec Benjamin - Let Me Down Slowly [Official Music Video].mp3',
            cover: 'https://i1.sndcdn.com/artworks-000352463268-5bfny8-t500x500.jpg',
          },
          {
            name: 'Wake up in the sky',
            artist: 'Gucci Mane, Bruno Mars, Kodak Black',
            url: 'Gucci Mane, Bruno Mars, Kodak Black - Wake Up in The Sky [Official Music Video].mp3',
            cover: 'https://upload.wikimedia.org/wikipedia/en/e/e2/Gucci_Mane%2C_Bruno_Mars%2C_Kodak_Black_-_Wake_Up_in_the_Sky.png',
          },
          
   
   
             ]
         });
