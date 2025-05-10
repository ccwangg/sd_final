// 等待整個網頁的 HTML 結構都載入完成後，再執行裡面的程式碼
document.addEventListener('DOMContentLoaded', () => {

    // 透過 ID 找到我們需要操作的元素
    const overlay = document.getElementById('welcome-overlay');
    const enterButton = document.getElementById('enter-button');
    const mainContent = document.getElementById('main-content');
    const bodyElement = document.body; // 找到 body 元素，用來恢復滾動

    // 檢查一下是不是真的找到了這些元素，避免出錯
    if (overlay && enterButton && mainContent && bodyElement) {

        // 監聽 "enter-button" 這個按鈕的 "click" (點擊) 事件
        enterButton.addEventListener('click', () => {
            // --- 當按鈕被點擊時，執行以下動作 ---

            // 1. 在歡迎介面 (overlay) 加上 'hidden' 這個 class
            //    這樣 CSS 規則 #welcome-overlay.hidden 就會生效，觸發淡出效果
            overlay.classList.add('hidden');

            // 2. 讓主要內容顯示出來
            //    為了讓淡出效果播完再顯示，稍微延遲一下
            //    CSS 淡出是 0.8 秒，我們可以在 0.5 秒時就開始顯示內容
            setTimeout(() => {
                mainContent.style.display = 'block'; // 或 'flex', 'grid' 等，看你的佈局需要
            }, 500); // 500 毫秒 = 0.5 秒

            // 3. 恢復頁面的滾動功能
            //    也是稍微延遲一下，等淡出動畫差不多結束
            setTimeout(() => {
                bodyElement.style.overflow = 'auto'; // 恢復滾動 (如果內容超過一頁)
            }, 800); // 800 毫秒 = 0.8 秒 (等同於 CSS 淡出時間)

            // (可選) 如果你希望歡迎介面在淡出動畫結束後，徹底從網頁結構中移除 (有時可節省一點點效能)
            // 可以監聽 'transitionend' 事件 (也就是 CSS 的 transition 動畫結束時)
            /*
            overlay.addEventListener('transitionend', () => {
                // 確保只有在 opacity 的 transition 結束時才觸發 (避免 visibility 也觸發)
                if (event.propertyName === 'opacity') {
                     overlay.style.display = 'none'; // 徹底隱藏
                }
            }, { once: true }); // { once: true } 表示這個監聽器只觸發一次就自動移除
            */

        }); // addEventListener 'click' 結束

    } else {
        // 如果找不到必要的元素，在主控台印出錯誤訊息，方便除錯
        console.error("錯誤：找不到歡迎介面、按鈕或主要內容元素！請檢查 HTML 的 ID 是否正確。");
    }

}); // DOMContentLoaded 結束