
export function sayHello() {
  console.log("test hello");
}


export function t() {
  const button = document.getElementById('change-btn');
  button.addEventListener('click', function() {
    const json_text = document.getElementById('json-input-field').value;
    //alert('ボタンがクリックされました3！'+json_text);
    //document.evaluate('//*[@id="chat"]/div"]').innerHTML = '<div><h1>'+json_text+'</h1></div>';
    document.getElementById('json-zu').innerHTML = '<div class"jsons_wrap" style="background-color: #5eabac; border: #87f4f6 1px;"><h1 style="color: #f59e0b;">'+json_text+'</h1></div>';
    
  });
}