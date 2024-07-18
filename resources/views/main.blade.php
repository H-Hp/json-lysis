<title>JSON Iysis - Jsonを見やすい図へ変換</title>
<meta name="description" content="JSONデータを直感的な図に変換する「JSON Iysis」は、複雑な構造を持つJSONを簡単に理解できるように可視化します。このツールは、リアルタイムでの編集とグラフの更新が可能です。エラーの検出、グラフの向きの変更、そしてグラフを画像としてエクスポートする機能も備えています。JSON Iysisは、Web開発やプレゼンテーションでの使用に最適なツールです。" />
<link rel="shortcut icon" href="/favicons/favicon.svg">
<link rel="canonical" href="https://json-lysis.xyz/">
<!--
<link rel="stylesheet" href="{{ asset('/build/asset/app.css') }}" >
<script src="{{ asset('/build/asset/app.js') }}"></script>
-->
@vite(['resources/css/app.css', 'resources/js/app.js'])
@vite('resources/css/app.css')
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Googleアナリティクストラッキング tag (gtag.js) --><script async src="https://www.googletagmanager.com/gtag/js?id=G-N4Z9LH5GT2"></script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'G-N4Z9LH5GT2');</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "JSON Iysis - Jsonを見やすい図へ変換",
  "description": "JSONデータを直感的な図に変換する「JSON Iysis」は、複雑な構造を持つJSONを簡単に理解できるように可視化します。このツールは、リアルタイムでの編集とグラフの更新が可能です。エラーの検出、グラフの向きの変更、そしてグラフを画像としてエクスポートする機能も備えています。JSON Iysisは、Web開発やプレゼンテーションでの使用に最適なツールです。",
  "applicationCategory": "WebApplication",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "JPY"
  },
  "creator": {
    "@type": "Person",
    "name": "RollTall"
  }
}
</script>

<meta property="og:url" content="https://json-lysis.xyz/">
<meta property="og:type" content="website">
<meta property="og:title" content="JSON Iysis - Jsonを見やすい図へ変換">
<meta property="og:site_name" content="JSON Iysis - Jsonを見やすい図へ変換">
<meta property="og:image" content="https://json-lysis.xyz/Logo.png">

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@RollTall">
<meta name="twitter:description" content="JSON Iysis - Jsonを見やすい図へ変換" />
<meta name="twitter:image" content="https://json-lysis.xyz/Logo.png" />



<div class="flex flex-col justify-between h-screen bg-gray-800 p-2 mx-auto max-w-full">
  <header class="flex items-center justify-center text-gray-200 text-2xl my-5">
    <div class="text-4xl ml-3 mr-3">JSON Iysis - Jsonを見やすい図へ変換</div>
  </header>

  <a href="https://x.com/share?ref_src=twsrc%5Etfw" className="twitter-share-button fixed left-4 top-4 md:right-14 md:top-6 text-xl text-gray" data-show-count="false" data-text="JSON Iysis - Jsonを見やすい図へ変換" data-url="https://json-lysis.xyz" data-size="summary" >ポスト</a><script async src="https://platform.x.com/widgets.js"></script>

    <a class="fixed left-4 top-4 md:right-14 md:top-6 text-xl text-white" href="https://github.com/H-Hp/json-lysis">
        <button class="fixed right-12 top-4 md:right-12 md:top-6 text-xl text-white github-button">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path d="M511.6 76.3C264.3 76.2 64 276.4 64 523.5 64 718.9 189.3 885 363.8 946c23.5 5.9 19.9-10.8 19.9-22.2v-77.5c-135.7 15.9-141.2-73.9-150.3-88.9C215 726 171.5 718 184.5 703c30.9-15.9 62.4 4 98.9 57.9 26.4 39.1 77.9 32.5 104 26 5.7-23.5 17.9-44.5 34.7-60.8-140.6-25.2-199.2-111-199.2-213 0-49.5 16.3-95 48.3-131.7-20.4-60.5 1.9-112.3 4.9-120 58.1-5.2 118.5 41.6 123.2 45.3 33-8.9 70.7-13.6 112.9-13.6 42.4 0 80.2 4.9 113.5 13.9 11.3-8.6 67.3-48.8 121.3-43.9 2.9 7.7 24.7 58.3 5.5 118 32.4 36.8 48.9 82.7 48.9 132.3 0 102.2-59 188.1-200 212.9a127.5 127.5 0 0 1 38.1 91v112.5c.8 9 0 17.9 15 17.9 177.1-59.7 304.6-227 304.6-424.1 0-247.2-200.4-447.3-447.5-447.3z"></path>
            </svg>
        </button>
    </a>

<button id="openModal" class="fixed right-4 top-4 md:right-6 md:top-6 text-xl text-white animate-pulse-once info-button">
  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
    <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
    <path d="M464 336a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm72 112h-48c-4.4 0-8 3.6-8 8v272c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8V456c0-4.4-3.6-8-8-8z">
    </path>
  </svg>
</button>
<div class="flex w-full flex-grow overflow-hidden relative">
  <div id="chat" class="flex flex-col w-full lg:w-3/5 mr-4 mx-5 lg:mx-0">
    <div id="json-zu" class="border-2 border-gray-600 p-6 rounded-lg overflow-y-scroll flex-grow flex flex-col justify-end bg-gray-700">
      <div>
      </div>
    </div>

  </div>
  <div class="absolute transform translate-x-full transition-transform duration-500 ease-in-out right-0 w-2/3 h-full bg-gray-700 overflow-y-auto lg:static lg:translate-x-0 lg:w-2/5 lg:mx-2 rounded-lg">
    <div class="flex flex-col border-2 overflow-y-auto rounded-lg border-gray-500 w-full ">
      <div class="flex flex-col items-start sticky top-0 w-full">
          <div class="flex flex-col items-start lg:flex-row w-full lg:flex-wrap p-2">

          </div>              
          <div class="flex-grow w-full px-4">
            <button id="change-btn"  class="inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm outline-offset-2 transition active:transition-none bg-zinc-600 font-semibold text-zinc-100 hover:bg-zinc-400 active:bg-zinc-800 active:text-zinc-100/70 w-full my-2 uppercase active:scale-[98%] transition-transform duration-100" style="background-color:#4f6574;color:white">
                jsonを図に変換
            </button>
          </div>
          <div class="flex p-2"></div>
        </div>
        <div class="flex flex-wrap w-full"></div>
<!--
        {
          "key1" : "value1",
          "key2" : "value2",
          "key3" : "value3"
        }
      -->
<textarea name="" id="json-input-field" class="json-input-field">
{
  "squadName": "Super hero squad",
  "homeTown": "Metro City",
  "formed": 2016,
  "secretBase": "Super tower",
  "active": true,
  "members": [
    {
      "name": "Molecule Man",
      "age": 29,
      "secretIdentity": "Dan Jukes",
      "powers": [
        "Radiation resistance",
        "Turning tiny",
        "Radiation blast"
      ]
    },
    {
      "name": "Madame Uppercut",
      "age": 39,
      "secretIdentity": "Jane Wilson",
      "powers": [
        "Million tonne punch",
        "Damage resistance",
        "Superhuman reflexes"
      ]
    },
    {
      "name": "Eternal Flame",
      "age": 1000000,
      "secretIdentity": "Unknown",
      "powers": [
        "Immortality",
        "Heat Immunity",
        "Inferno",
        "Teleportation",
        "Interdimensional travel"
      ]
    }
  ]
}
</textarea>
      </div>
    </div>
    <button type="button" class="absolute left-20 transform -translate-x-12 bg-gray-800 text-white rounded-l py-2 px-4 lg:hidden">☰</button>
  </div>
</div>

<div id="modal" class="modal" ariahidden="false">
    <div class="modal-content">
        <span class="close-button close">閉じる</span>
            <div class="feature">
                <h2>JSON Iysisとは？</h2>
                <p>JSON Iysisは、複雑なJSONデータを簡単に理解できる直感的な図に変換するWebサービスです。データの構造を視覚化することで、開発者やデータアナリストの作業効率を大幅に向上させます。</p>
            </div>
            <h3>主な機能</h3>
            <div class="feature">
                <h4>リアルタイム変換</h4>
                <p>JSONデータを入力すると、即座に図に変換されます。編集しながらリアルタイムで図が更新されるので、データ構造の変更をすぐに確認できます。</p>
            </div>
            <div class="feature">
                <h4>エラー検出</h4>
                <p>JSONの構文エラーを自動的に検出し、問題のある箇所を指摘します。デバッグ作業が格段に効率化されます。</p>
            </div>
            <div class="feature">
                <h4>グラフの向き変更</h4>
                <p>縦方向や横方向など、グラフの向きを自由に変更できます。データ構造に応じて最適な表示方法を選択できます。</p>
            </div>
            <div class="feature">
                <h4>画像エクスポート</h4>
                <p>生成された図を画像としてエクスポートできます。プレゼンテーションや文書作成時に便利です。</p>
            </div>

            <div class="feature">
                <h3>利用シーン</h3>
                <ul>
                    <li>Web開発でのAPI応答の確認</li>
                    <li>データ構造の視覚化によるチーム内コミュニケーション</li>
                    <li>複雑なJSONデータの分析</li>
                    <li>プレゼンテーションでのデータ構造の説明</li>
                </ul>
            </div>
            <div class="feature">
                <p>JSON Iysisは完全無料で利用できます。アカウント登録も不要です。</p>
            </div>

            <span class="close-button close">閉じる</span>
    </div>
</div>
