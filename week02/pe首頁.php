<?php include('head.php'); ?>
    <style>
      .row{display:flex;flex-wrap: wrap; padding-top: 100px;}
      .leftcolumn,.rightcolumn{flex:1;padding:10px;}
      .card{background-color: #f1f1f1;margin: 10px 0;padding: 10px;overflow: visible;}
      .mytooltip {
        
        display: inline-block;
        cursor: pointer;/*手指*/
      }

      .mytooltip .mytooltiptext {
        visibility: hidden;
        width: 200px;
        background-color: black;
        color: #f1f1f1;
        text-align: center;
        padding: 8px;
        border-radius: 6px;
        border: 1px solid #ccc;

        
        position: absolute;
        z-index: 9999;/*最上層*/
        top: -125%; /* 上方 */
        left: 0;
        transform: none;

        opacity: 0;/*透明度*/
        transition: opacity 0.3s;
      }

      .mytooltip:hover .mytooltiptext {
        visibility: visible;
        opacity: 1;
      }
      .body{background-color: rgba(44,62,80,1);}
    </style>

    <title>遊憩運動</title>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
      google.charts.load('current', { packages: ['corechart'] });/*在頁面上畫圖表*/
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        const data = google.visualization.arrayToDataTable([/*提供的圓餅圖元件*/
          ['核心素養項目', '比例'],
          ['自主行動：身心素質與自我精進', 15.2],
          ['自主行動：系統思考與解決問題', 14.8],
          ['自主行動：規劃執行與創新應變', 14.55],
          ['溝通互動：符號運用與溝通表達', 8.86],
          ['溝通互動：科技資訊與媒體素養', 6.68],
          ['溝通互動：藝術涵養與美感素養', 5.30],
          ['社會參與：道德實踐與公民意識', 6.63],
          ['社會參與：人際關係與團隊合作', 18.07],
          ['社會參與：多元文化與國際理解', 9.9]
        ]);

        const options = {
          title: '核心素養圓餅圖',
          pieHole: 0.4,
          width: 500,
          height: 500,
          colors: [
            '#A7B8BF', '#D8CFC4', '#C7AFA3', '#A8B5A2', '#C1B2AB',
            '#B3C2BF', '#8B8C89', '#E2D4C0', '#9AA7A0'
          ]
        };

        const chart = new google.visualization.PieChart(document.getElementById('corechart'));
        chart.draw(data, options);
      }
    </script>

    <!-- 自定義樣式 -->
    <style>
      .row {
        display: flex;
        flex-wrap: wrap;
        padding-top: 100px;
      }
      .leftcolumn, .rightcolumn {
        flex: 1;
        padding: 10px;
      }
      .card {
        background-color: #514d4d;
        margin: 10px 0;
        padding: 10px;
        overflow: visible;
      }
      .mytooltip {
        position: relative;
        display: inline-block;
        cursor: pointer;
      }
      .mytooltip .mytooltiptext {
        visibility: hidden;
        width: 200px;
        background-color: black;
        color: #f1f1f1;
        text-align: center;
        padding: 8px;
        border-radius: 6px;
        border: 1px solid #ccc;
        position: absolute;
        z-index: 9999;
        top: -125%;
        left: 0;
        opacity: 0;
        transition: opacity 0.3s;
      }
      .mytooltip:hover .mytooltiptext {
        visibility: visible;
        opacity: 1;
      }
      .body {
        background-color: rgba(78, 79, 82, 0.944);
      }
    </style>
    <link rel="stylesheet" href="styles.css">
    
    <link href="https://cdn.jsdelivr.net/npm/startbootstrap-agency@6.0.6/css/styles.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    



    <div class="row">
    <div class="leftcolumn">
    <div class="card">
    <h4>簡要介紹</h4>
    <p>遊憩運動學群，以有助於人類身心理活動運作為核心的理論與實務規劃，包含了觀光休閒活動的投入與產出的規劃與管理，運動科學（運動生理、心理、生物力學等）理論與實務管理。</p>
    <h4>學習內容</h4>
    <p>觀光休閒產業經營、觀光運輸與管理、運動科學管理（運動生理、心理、生物力學等）、運動技能之訓練。</p>
    <h4>主要學類</h4>
    <p>體育 舞蹈 運動管理</p>
    
    <h4>興趣類型</h4>
    <p>
      <span class="mytooltip">
        <span style="text-decoration: underline dotted;">企業型(E)</span><!--點狀-->
        <span class="mytooltiptext">
          精力旺盛、好冒險競爭，他們做事有計畫並立刻行動。不願花太多時間仔細研究，希望擁有權力去改善不合理的事。
        </span>
      </span>
      <span class="mytooltip">
        <span style="text-decoration: underline dotted;">社會型(S)</span>
        <span class="mytooltiptext">
          對人和善，容易相處，他們關心自己和別人的感受，喜歡傾聽和了解別人，也願意付出時間和精力去解決別人的衝突，喜歡教導別人，並幫助他人成長。不愛競爭，喜歡大家一起作事，一起為團體盡力。交友廣闊，關心別人勝於關心工作。
        </span>
      </span>
    </p>
    <h4>知識領域</h4>
    <p>
      <span class="mytooltip">
        <span style="text-decoration: underline dotted;">管理</span>
        <span class="mytooltiptext">
          關於經營管理策略的制定、資源的分配、人力資源模型、領導技巧、生產方法、人員與資源的協調等知識
        </span>
      </span>
      
      <span class="mytooltip">
        <span style="text-decoration: underline dotted;">人群服務</span>
        <span class="mytooltiptext">
          關於顧客及人群服務的原則與程序的知識，包括需求調查、服務水準及滿意度的評量
        </span>
      </span>
      
      <span class="mytooltip">
        <span style="text-decoration: underline dotted;">教育訓練</span>
        <span class="mytooltiptext">
          關於課程設計及教育訓練的原理原則及方法、個別和團體教學及訓練成效評量等知識
        </span>
      </span>
      
      <span class="mytooltip">
        <span style="text-decoration: underline dotted;">銷售行銷</span>
        <span class="mytooltiptext">
          關於產品或服務的展示、促銷和銷售的原則和方法，包括市場策略、產品展示、銷售技巧及銷售控制系統等知識
        </span>
      </span>
    </p>
    
    <h4>重要學科</h4>
    <p>體育   國語文   英語文   健康與護理   生涯規劃   資訊科技 </p>
    <h4>加深加廣</h4>
    <p>語文表達與傳播應用   運動與健康   英語聽講   安全教育與傷害防護   健康與休閒生活   未來想像與生涯進路   英文閱讀與寫作   動物體的構造與功能  </p>
    <h4>多元能力</h4>
    <p>
      <span class="mytooltip">
        <span style="text-decoration: underline dotted;">語文表達與傳播應用</span>
        <span class="mytooltiptext">
          能透過語文理解他人想法形成特定概念，且能說明特定想法或因果關係。
        </span>
      </span>

      <span class="mytooltip">
        <span style="text-decoration: underline dotted;">肢體力量與協調</span>
        <span class="mytooltiptext">
          能使肢體快速連續彎曲、伸展或扭轉，呈現力量與平衡，做出跳躍、衝刺、投擲動作。
        </span>
      </span>

      <span class="mytooltip">
        <span style="text-decoration: underline dotted;">主動學習</span>
        <span class="mytooltiptext">
          積極尋求新資訊用以掌握問題的前因、後果以及預期影響，並依據個環節選擇適合的學習行為。
        </span>
      </span>

      <span class="mytooltip">
        <span style="text-decoration: underline dotted;">問題解決</span>
        <span class="mytooltiptext">
          分析並預判問題的成因與後果，設想出合適的解決方法及使用的工具。
        </span>
      </span>

      <span class="mytooltip">
        <span style="text-decoration: underline dotted;">社會覺察與合作</span>
        <span class="mytooltiptext">
          覺察並理解他人的感受或想法，並調整自己的做法，配合他人來完成任務。
        </span>
      </span>

      <span class="mytooltip">
        <span style="text-decoration: underline dotted;">專注力</span>
        <span class="mytooltiptext">
          投入心力在特定訊息及排除外部干擾。
        </span>
      </span>
    </p>
    <h4>性格特質</h4>
    <p>
      <span class="mytooltip">
        <span style="text-decoration: underline dotted;">主動積極</span>
        <span class="mytooltiptext">
          常常主動提出特定見解，樂於付出活力與熱情投入特定問題、活動，引導他人得行動。
        </span>
      </span>

      <span class="mytooltip">
        <span style="text-decoration: underline dotted;">合作互助</span>
        <span class="mytooltiptext">
          總是願意優先關照、包容他人的需求，在不同意見中尋求最大的合作可能，優先尋求團體的共同價值，信任團體成員的指引。
        </span>
      </span>

      <span class="mytooltip">
        <span style="text-decoration: underline dotted;">樂群敬業</span>
        <span class="mytooltiptext">
          總是表現活潑、傳遞熱情，主動參與活動，熱衷於與夥伴一同完成任務。
        </span>
      </span>
    </p>
    <h4>生涯發展</h4>
    <p>旅遊／餐飲／休閒相關職類/教育／學術／研究相關職類</p>
    </div>
    </div>
    <div class="rightcolumn">
      <div class="card">
      <h4>核心素養</h4>
      <div id="corechart" style="margin: 20px auto;"></div> <!-- 圓餅圖插入位置 -->
      
      <h4>學群內學類間關係圖</h4>
      <img src="空間.png" width="300vw" height="300vh" alt="核心.png" />
      <p>本學群的學類分佈不易判斷學群重心，或許可以休閒管理、運動管理學類為重心。學類聚集效果鮮明，如中下區的運動管理、運動保健為一群；休閒管理、觀光事業、餐旅管理為一群。生涯志向可依據相近位置的學類納為選擇範圍。</p>
    </div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
  </body>
</html>
        