<?php if (!defined('__TYPECHO_ROOT_DIR__'))
  exit; ?>
<?php if (!$this->page404()): ?>
  <footer id="footer">
    <div id="footer-wrap">
      <script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>
      <script>
        const confetti = new JSConfetti();
        let lastTriggerTime = 0;
        function showConfetti() {
          const currentTime = Date.now();
          // Check if 3 seconds have passed since the last trigger
          if (currentTime - lastTriggerTime > 2000) {
            confetti.addConfetti({
              emojis: ['🎅', '🏃‍♂️', '🤞', '🎉', '🏀', '🀄', '🍔', '🌀'],
              emojiSize: 60,
              confettiNumber: 40,
            });
            lastTriggerTime = currentTime;
          }
        }
        document.getElementById('footer-wrap').onmouseover = showConfetti;
      </script>

      <div class="copyright">

        <div class="copyright">
          <a href="https://beian.miit.gov.cn/" target="_blank">鄂ICP备2024037645号</a>
          | Copyright ©
          <?php echo date('Y'); ?> By
          <?php $this->author(); ?>
        </div>
        <div class="framework-info" style="margin-bottom:20px;">
          <span>主题</span>
          <a id="btheme" target="_blank" href="https://github.com/wehaox/Typecho-Butterfly">Butterfly</a>
        </div>
        <a target="_blank" href="https://typecho.org/" title="博客框架为Typecho_v1.2.1"><img
            src="https://img.shields.io/badge/Frame-Typecho-ffffff?logo=data:image/svg+xml;base64,PHN2ZyB0PSIxNzA4MzQ5MjMzNjg2IiBjbGFzcz0iaWNvbiIgdmlld0JveD0iMCAwIDEwMjQgMTAyNCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHAtaWQ9IjU0ODMiIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIj48cGF0aCBkPSJNNTEyIDEwMjRDMTMyLjY0NzM4NSAxMDI0IDAgODkxLjMxMzIzMSAwIDUxMlMxMzIuNjQ3Mzg1IDAgNTEyIDBzNTEyIDEzMi42ODY3NjkgNTEyIDUxMi0xMzIuNjQ3Mzg1IDUxMi01MTIgNTEyek0yMzYuMzA3NjkyIDM1NC40NjE1MzhoNTUxLjM4NDYxNlYyNzUuNjkyMzA4SDIzNi4zMDc2OTJ2NzguNzY5MjN6IG0wIDE5Ni45MjMwNzdoMzkzLjg0NjE1NHYtNzguNzY5MjNIMjM2LjMwNzY5MnY3OC43NjkyM3ogbTAgMTk2LjkyMzA3N2g0NzIuNjE1Mzg1di03OC43NjkyM0gyMzYuMzA3Njkydjc4Ljc2OTIzeiIgZmlsbD0iI2ZmZmZmZiIgcC1pZD0iNTQ4NCI+PC9wYXRoPjwvc3ZnPg==&logoColor=white"></a><a
          target="_blank" href="https://github.com/wehaox/Typecho-Butterfly" title="主题魔改自typecho-butterfly"><img
            src="https://img.shields.io/badge/Theme-Butterfly-FFC0CB?logo=data:image/svg+xml;base64,PHN2ZyB0PSIxNzA4MzQ5MTc2MTM5IiBjbGFzcz0iaWNvbiIgdmlld0JveD0iMCAwIDEwMjQgMTAyNCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHAtaWQ9IjQxMzIiIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIj48cGF0aCBkPSJNNTEyLjAwNTQ0IDQ4MHYxOTJoLTEwLjI0Yy0yNS42IDY0LTQyLjU2IDExNy43Ni03NS44NCAxNjQuOC0yNCAzMy42LTU2Ljk2IDU1LjY4LTk0LjQgNTguODgtMTIwLjMyIDkuNi0yNjUuNi0xODEuMTItMTQ2LjU2LTI5Mi44IDIwLjQ4LTE5LjIgNDQuMTYtMzMuMjggNjcuNTItNDcuMzYtMjAuOC0xMS4yLTQ1LjEyLTQuMTYtNjcuODQgMC42NC0yMi43MiA0LjgtNDkuMjggNS40NC02NC42NC0xNC40LTEzLjc2LTE3LjI4LTEzLjEyLTQzLjg0LTEzLjEyLTY3LjItMC42NC01My40NC0xMC41Ni0xMDYuMjQtMjcuMi0xNTYuMTYtMTEuODQtMzUuMi0zNC41Ni02Ny41Mi00NC40OC0xMDIuNzItNC44LTE2LjY0LTQuOC0zNi40OCAzLjUyLTUwLjg4IDguNjQtMTQuNzIgMjQuOTYtMjIuNCA0MC42NC0yMi40IDE1LjM2IDAgMzAuNCA1LjEyIDQ1LjEyIDExLjUyIDEzMy4xMiA1OS41MiAyNTAuODggMTUyLjY0IDMzNC40IDI5NC43MiAxMS4yIDE5LjIgMzEuMDQgMzEuMzYgNTMuMTIgMzEuMzZ6IiBmaWxsPSIjZmZmZmZmIiBwLWlkPSI0MTMzIj48L3BhdGg+PHBhdGggZD0iTTEzNy4zNDk0NCAxMjQuNzA0Yy0xNC45MTItNi42MjQtMzUuMDA4LTE0LjI3Mi01OC4wOC0xNC4yNzItMjguMzIgMC4wMzItNTQuNDY0IDE0LjcyLTY4LjE2IDM4LjM2OC0xMS45MDQgMjAuNDgtMTQuMzY4IDQ3LjkzNi02Ljc1MiA3NS4yOTYgNi4wOCAyMS45ODQgMTYgNDEuNzYgMjUuNTM2IDYwLjg5NiA3LjUyIDE1LjEwNCAxNC42NTYgMjkuMzc2IDE5LjQyNCA0My42OCAxNi41MTIgNDkuMzc2IDI1LjA1NiA5OC41NiAyNS40MDggMTQ2LjA0OHY0LjE5MmMwLjE2IDI1LjY2NCAwLjMyIDU3LjYgMTkuOTY4IDgyLjU5MiA5LjYzMiAxMi4zMiAyNy4yNjQgMjYuNzg0IDU3LjQ3MiAyOS4wNTYtNDUuMzQ0IDQ5Ljk1Mi01NiAxMTYuNDE2LTI4Ljk5MiAxODQuNjcyQzE1Ny42Mzc0NCA4NjIuMzM2IDI0My4zNjU0NCA5MjggMzIyLjU2NTQ0IDkyOGMzLjg0IDAgNy42OC0wLjE2IDExLjUyLTAuNDggNDUuMzQ0LTMuNjggODcuMTM2LTI5LjM0NCAxMTcuNzI4LTcyLjIyNCAyNi40OTYtMzcuMTg0IDQzLjMyOC03OC4xNDQgNjAuMTYtMTIxLjQ0IDE2LjgzMiA0My4yOTYgMzMuNjY0IDg0LjI1NiA2MC4xNiAxMjEuNDQgMjkuOTIgNDEuOTg0IDcxLjc0NCA2Ny4yIDExNy42OTYgNzAuOTEyIDMuODQgMC4zMiA3LjcxMiAwLjQ4IDExLjU4NCAwLjQ4aDAuMDMyYzc5LjI2NCAwIDE2NS4wMjQtNjUuNTM2IDE5OS40MjQtMTUyLjQ4IDI2Ljg4LTY3Ljg0IDE2LjMyLTEzMy45NTItMjguNTc2LTE4My44MDggMjkuOTUyLTIuMzM2IDQ3LjQyNC0xNi43MDQgNTYuOTYtMjguOTI4IDE5LjY0OC0yNC45OTIgMTkuODQtNTYuODk2IDE5Ljk2OC04Mi41NmwwLjAzMi00LjE2YzAuMzUyLTQ3LjQ1NiA4Ljg5Ni05Ni42MDggMjUuMzc2LTE0NS45ODQgNC44LTE0LjI3MiAxMS45MzYtMjguNTEyIDE5LjQ1Ni00My41ODQgOS41MzYtMTkuMTM2IDE5LjQyNC0zOC44OCAyNS41MzYtNjAuODY0IDcuNjE2LTI3LjI2NCA1LjEyLTU0LjYyNC02LjcyLTc1LjA0LTEzLjYtMjMuMzYtMzkuNjgtMzcuODg4LTY4LjI4OC0zNy45Mi0xOC44NDggMC0zNy44MjQgNC4zODQtNTcuOTg0IDEzLjM0NC0xMzIuNjQgNTkuMDQtMjM5LjI2NCAxNDUuOTg0LTMxNy43NiAyNTguODQ4IDUuMTItMjcuMzYgNy4xMDQtNDkuNDcyIDcuMTA0LTUwLjA4IDAtMTYuMTI4LTYuMDE2LTMwLjcyLTE1LjY0OC00Mi4wOEM1NjEuNzAxNDQgMTk5LjU4NCA2MzguMjQ1NDQgMTI4IDczNi4wMDU0NCAxMjhhMTYgMTYgMCAxIDAgMC0zMmMtMTA4LjU0NCAwLTE5NS4xMDQgNzUuMzYtMjA2LjUyOCAxNzUuMjY0QTYyLjIwOCA2Mi4yMDggMCAwIDAgNTEyLjAwNTQ0IDI2OC40OGMtNi4wNDggMC0xMS43NzYgMS4xMi0xNy4zMTIgMi43MkM0ODMuNDYxNDQgMTcxLjM2IDM5Ni43NzM0NCA5NiAyODguMDA1NDQgOTZhMTYgMTYgMCAxIDAgMCAzMmM5Ny45MiAwIDE3NC41OTIgNzEuNTUyIDE3NS43NzYgMTYzLjJBNjQuOTkyIDY0Ljk5MiAwIDAgMCA0NDguMDA1NDQgMzMzLjQ3MmMwIDAuNjA4IDEuOTUyIDIyLjcyIDcuMDcyIDUwLjA0OEMzNzYuNjQ1NDQgMjcwLjcyIDI2OS45ODk0NCAxODMuNzQ0IDEzNy4zNDk0NCAxMjQuNzA0ek01MTIuMDA1NDQgMzAwLjQ4YzE3LjYzMiAwIDMyIDE0LjgxNiAzMiAzMi45OTIgMCAyNS4xNTItMTMuOTIgODcuMi0yNi43MiAxMTIuOTYtMy41MiAwLjYwOC03LjA0IDAuNjQtMTAuNTYgMC0xMi44LTI1Ljc2LTI2LjcyLTg3LjgwOC0yNi43Mi0xMTIuOTYgMC0xOC4xNzYgMTQuMzY4LTMyLjk2IDMyLTMyLjk2eiBtMC4wMzIgMjExLjUyYzMyLjcwNCAwIDYzLjU4NC0xOC4wMTYgODAuNjQtNDcuMDQgNzMuNTM2LTEyNS4xODQgMTgxLjIxNi0yMjAgMzIwLTI4MS43NiAxMS44NC01LjI4IDIyLjI3Mi03Ljg0IDMyLTcuODQgNC4zMiAwIDEwLjMwNCAxLjYgMTIuODk2IDYuMDQ4IDMuMDcyIDUuMjggMy4yMzIgMTUuNjggMC40MTYgMjUuNzYtNC40OCAxNi4wMzItMTIuNTQ0IDMyLjIyNC0yMS4xMiA0OS4zNzYtOC4xOTIgMTYuNDE2LTE2LjY3MiAzMy4zNzYtMjIuODggNTEuOTM2LTE4LjY1NiA1NS44MDgtMjguMjg4IDExMS41ODQtMjguNzA0IDE2NS43NnY0LjM1MmMtMC4xMjggMTYuNjcyLTAuMjI0IDM1LjU4NC02LjMzNiA0My4zOTItMS4wMjQgMS4yOC0zLjcxMiA0LjczNi0xNS4xNjggNC43MzYtNS4xMiAwLTExLjEwNC0wLjcwNC0xNy44ODgtMi4xNDRsLTYuOTc2LTEuNTA0Yy0yNS4yOC01LjU2OC01OC44OC05LjAyNC04Mi44OCA0LjIyNGEzMiAzMiAwIDAgMC0wLjg2NCA1NS41MmwyLjg4IDEuNzI4YzIxLjY2NCAxMi44NjQgNDIuMTEyIDI1LjAyNCA1OS4yNjQgNDEuMDg4IDQ0LjMyIDQxLjYgMzcuNTY4IDkwLjk3NiAyNC4wNjQgMTI1LjAyNC0yNC40NDggNjEuNzYtODcuMiAxMTIuMDMyLTEzOS45MDQgMTEyLjAzMi0yLjE0NCAwLTQuMjg4LTAuMDY0LTYuNC0wLjI1Ni0zNC40LTIuNzg0LTU3LjQ3Mi0yNS42LTcwLjc4NC00NC4yODgtMjQuMTYtMzMuOTItMzkuMzkyLTczLjI4LTU3LjAyNC0xMTguODQ4LTQuOTI4LTEyLjY0LTkuOTg0LTI1LjcyOC0xNS40NTYtMzkuMjY0YTMyIDMyIDAgMCAwLTI5LjY2NC0yMC4wMzJoLTIwLjI4OGEzMiAzMiAwIDAgMC0yOS42NjQgMjBjLTUuNDcyIDEzLjU2OC0xMC41NiAyNi42NTYtMTUuNDU2IDM5LjI5Ni0xNy42IDQ1LjU2OC0zMi44NjQgODQuOTI4LTU3LjAyNCAxMTguODQ4LTE5LjQ1NiAyNy4yNjQtNDQuNTc2IDQzLjQ1Ni03MC43NTIgNDUuNi01NC4zMDQgNC43MzYtMTIwLjgtNDcuNjQ4LTE0Ni4zMDQtMTEyLjA2NC0xMy41MDQtMzQuMjQtMjAuMzUyLTgzLjcxMiAyNC4wMzItMTI1LjQwOCAxOC4wOC0xNi45MjggMzkuNDg4LTI5LjY2NCA2Mi4xNDQtNDMuMTM2YTMyIDMyIDAgMCAwLTAuODk2LTU1LjUyIDg0Ljk2IDg0Ljk2IDAgMCAwLTQxLjYtMTAuMTc2Yy0xNC45NzYgMC0yOS4yMTYgMy4xMzYtNDEuNzkyIDUuODg4bC02LjQ2NCAxLjQwOGE4Ny41ODQgODcuNTg0IDAgMCAxLTE3LjY2NCAyLjExMmMtMTEuNTg0IDAtMTQuMzM2LTMuNDg4LTE1LjM2LTQuOC02LjA4LTcuODA4LTYuMjQtMjcuNTg0LTYuMzA0LTQzLjQ4OGwtMC4wMzItNC4zMmMtMC40MTYtNTQuMjcyLTEwLjA4LTExMC4wOC0yOC43MDQtMTY1Ljg1Ni02LjIwOC0xOC41Ni0xNC42ODgtMzUuNTItMjIuODgtNTEuOTY4LTguNTc2LTE3LjE4NC0xNi42NC0zMy40MDgtMjEuMTItNDkuNDcyLTMuMjk2LTExLjc3Ni0yLjE0NC0yMS41MzYgMC40NDgtMjYuMDE2IDIuNzg0LTQuOCA4LjY0LTYuNDk2IDEyLjg5Ni02LjQ5NiA4LjUxMiAwIDE4LjM2OCAyLjcyIDMxLjk2OCA4Ljc2OCAxMzguNzg0IDYxLjc2IDI0Ni40NjQgMTU2LjU3NiAzMjAgMjgxLjc5MkM0NDguMzI1NDQgNDkzLjk4NCA0NzkuMjM3NDQgNTEyIDUxMi4wMDU0NCA1MTJ6IiBmaWxsPSIjZmZmZmZmIiBwLWlkPSI0MTM0Ij48L3BhdGg+PC9zdmc+"></a><a
          target="_blank" href="https://cloud.tencent.com/" title="本站托管于腾讯云服务器"><img
            src="https://img.shields.io/badge/Hosted-腾讯云-0000FF?logo=data:image/svg+xml;base64,PHN2ZyB0PSIxNzA4MzQ5Mjg5NjMyIiBjbGFzcz0iaWNvbiIgdmlld0JveD0iMCAwIDEwMjQgMTAyNCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHAtaWQ9IjY4OTYiIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIj48cGF0aCBkPSJNNDcxLjQgMTk1Yy0zNS4xIDQuOC04Ni4xIDI0LjQtMTEwLjQgNDIuMy0yLjcgMi01LjYgMy44LTguNiA1LjQtNi40IDQuMy0xMi41IDktMTguNCAxNC4xLTMyLjIgMjcuMS01OS4zIDYzLjEtNzQuNiA5OC45LTguMSAxOS4yLTEwLjggMjctMTguNSA1NS43LTIuNSA5LjgtNiAxNC4yLTExLjQgMTQuMi05LjMgMC01Ny4xIDIwLjUtNzEuOSAzMC42LTExLjEgNy44LTM3LjggMzEuNy00Mi42IDM4LjItMjUgMzQuMi0yOS43IDQyLjgtMzcuNyA2Ny45LTYuOSAyMS45LTkuOCA0MC43LTkuOCA2My40IDAgNTYuOCAxOS42IDEwNC40IDU5LjcgMTQ0LjQgMjQuNyAyNC44IDUzLjggNDIuNiA4My43IDUxIDM1LjIgOS44IDI0LjkgOS42IDMwMC4xIDkuNiAyMzEuMiAwIDI1NS4xLTAuMyAyNzAuNi0zIDE4LjktMy41IDQ3LjEtMTAuOSA1MC40LTEzLjQgMS4yLTAuOSA1LTIuOCA4LjQtNC4xIDguMi0zLjIgMjctMTUuNSA0MS4xLTI2LjcgNDUuOC0zNi42IDc0LjQtOTcuNCA3NC42LTE1OCAwLTE3LjUtNi45LTU3LjUtMTEuNi02Ni40LTEuMy0yLjMtMi4yLTQuOS0yLjctNy41IDAtMy4yLTEzLjctMjkuOS0xNy41LTM0LjMtMi45LTMuNi01LjYtNy4zLTguMi0xMS4yLTYuOS0xMS4xLTE1LjgtMjAuNS0zMy4xLTM0LjktMTcuMy0xNC44LTI4LjUtMjIuNS0zNy40LTI2LTIuOS0xLTUuNi0yLjMtOC4yLTMuOS0yLjUtMS44LTM0LjYtMTMuNi00My40LTE1LjgtMTAuOS0xLjYtMjItMi41LTMzLTIuOC0yOS45LTEuMS01MS42IDEuMS02Ni44IDYuOC01LjMgMi0xMy42IDQuOC0xOC4xIDYuNC0xMC44IDMuNi0zMyAxNS43LTQzLjUgMjMuNy0yMi41IDE3LjMtNjguOCA1OC43LTk0LjIgODQuNi0xMCAxMC4yLTEyOC4yIDEyNC4xLTE2Ny4yIDE2MS4yLTkuOCA5LjMtMjQuNCAyMy43LTMyLjYgMzEuOWwtMTQuOCAxNC44LTI5LjYtMS4zYy0xNS4yLTAuNS0zMC4zLTEuNy00NS40LTMuNi00Ni4zLTcuNy04NC40LTQyLjYtOTctODktMy43LTEzLjYtNC4xLTQ3LjktMC43LTYxLjQgNS45LTIzLjIgMjIuOC00OS45IDQxLjUtNjUuNiAxOS43LTE2LjUgNTQuMy0yOC44IDgxLTI4LjggMzIuMSAwIDY3LjcgMTYuNSA5OS4yIDQ1LjkgNiA1LjUgMTQuOSAxMy4zIDE5LjYgMTcuMyA0LjggMy45IDEzLjcgMTEuNyAxOS42IDE3LjMgNiA1LjcgMTEuOSAxMC40IDEzLjMgMTAuNCAzLjIgMCAxMC4yLTUuOSAzNS40LTMwLjYgMTEuOS0xMS44IDIxLjctMjIuNSAyMS43LTIzLjcgMC0xLjItNy44LTguOS0xNy4zLTE2LjktOS42LTguMi0xOC43LTE2LTIwLjMtMTcuOC0zLjQtMy45LTM1LjItMjkuOC01MS42LTQyLTE3LTEyLjMtMzUuOC0yMi4yLTU1LjYtMjkuMi04LjctMy40LTE2LjItNi44LTE2LjUtOC0wLjktMi4zIDEwLjMtMzQuNiAxNS43LTQ0LjUgMTEtMjEuMiAyNS4xLTM5LjIgNDUuNC01OC40IDE4LjUtMTcuNSA0OC43LTM0LjIgNzIuNy00MC4yIDMuOS0wLjkgMTIuMy0zLjIgMTguNy00LjggOC41LTIuMyAxOC4zLTMuMiAzNy40LTMuMiAyMi4yIDAgMjguMyAwLjcgNDQuNSA0LjhDNTkwLjkgMjg4IDYxNC44IDMwMCA2MzkgMzIxYzE1LjUgMTMuNiAzMS42IDMyLjQgNDEuNyA0OS43IDQuNyA3LjkgOS4xIDE0LjYgOS44IDE1LjIgNC4zLTAuMSA4LjctMC44IDEyLjgtMiA2LjQtMS40IDI0LTMuMiAzOS4yLTMuNyAzMC45LTEuNCAzMS44LTEuOCAyNS4yLTE0LjMtMS44LTMuNi00LjQtOS44LTUuNy0xMy43LTEuNi00LjctMy43LTkuMS02LjMtMTMuMy0xLjgtMi44LTMuNS01LjgtNC45LTguOS0zLjktOC4yLTIwLjEtMjkuOS0zNS4zLTQ3LjMtMTguNC0yMS01MS4xLTQ1LjYtNzguMi01OC44LTYuNy0zLjMtMTMuNC02LjctMjAuMS0xMC0zLjItMS42LTguOS0zLjYtMzIuNC0xMC45LTI5LjgtMTAtNzYuMy0xMy4xLTExMy40LTh6IG0zMDMuNyAzMTBjMzIuOCA4LjQgNTEgMTkgNzAuMiA0MS41IDIwIDIyLjkgMjcuNCA0My42IDI4LjMgNzcuMyAwLjggMjAuOSAwLjQgMjQtMy45IDM3LjItNi4xIDE4LjgtMTIgMzAuNS0yMSA0MS42LTE3LjMgMjEuMi00Mi40IDM3LjUtNjYuMSA0My4xLTEyLjEgMi0yNC40IDMuNC0zNi42IDQuMS0zMyAyLjEtMzAwLjQgMi4zLTMwMS43IDAuMi0wLjUtMC45IDE4LjQtMjAuNCA0Mi4xLTQzLjEgMjMuNy0yMyA0OC4zLTQ2LjkgNTQuNy01My4yIDE5LjItMTguOSA5Mi45LTg5LjQgMTAzLjQtOTguOSAzLjktMy41IDcuNy03LjIgMTEuMy0xMS4xIDIuMy0zLjYgMjYuNy0yMS4yIDM3LjItMjYuNyA1LjItMi44IDE1LjUtNi45IDIyLjgtOS4zIDcuMy0yLjEgMTQuMi00LjMgMTUuMS00LjYgNS4xLTEuOSAzNC43LTAuNiA0NC4yIDEuOXogbTAgMCIgZmlsbD0iI2ZmZmZmZiIgcC1pZD0iNjg5NyI+PC9wYXRoPjwvc3ZnPg==&logoColor=white"></a><a
          target="_blank" href="https://github.com/sinlatansen" title="网站源码储存于Github仓库"><img
            src="https://img.shields.io/badge/Source-Github-8A2BE2?logo=GitHub"></a>
        <style>
          a {
            margin-right: 10px;
          }
        </style>
        <div class="footer_custom_text">
          <?php $this->options->Customfooter() ?>
        </div>
      </div>
    </div>
  </footer>
<?php endif ?>
<?php $this->footer(); ?>
<style type="text/css" data-typed-js-css="true">
  .typed-cursor {
    opacity: 1;
  }

  .typed-cursor.typed-cursor--blink {
    animation: typedjsBlink 0.7s infinite;
    -webkit-animation: typedjsBlink 0.7s infinite;
    animation: typedjsBlink 0.7s infinite;
  }

  @keyframes typedjsBlink {
    50% {
      opacity: 0.0;
    }
  }

  @-webkit-keyframes typedjsBlink {
    0% {
      opacity: 1;
    }

    50% {
      opacity: 0.0;
    }

    100% {
      opacity: 1;
    }
  }
</style>
<?php if ($this->options->showFramework == 'off'): ?>
  <style>
    .framework-info {
      display: none
    }
  </style>
<?php endif; ?>
<?php if ($this->options->CursorEffects !== 'off' && $this->options->CursorEffects == 'heart'): ?>
  <script id="click-heart" src="<?php cdnBaseUrl() ?>/js/click-heart.min.js" async="async" mobile="false"></script>
<?php elseif ($this->options->CursorEffects !== 'off' && $this->options->CursorEffects == 'fireworks'): ?>
  <canvas class="fireworks"></canvas>
  <script id="fireworks" src="<?php cdnBaseUrl() ?>/js/fireworks.min.js" async="async" mobile="false"></script>
<?php endif; ?>
<?php if ($this->options->ShowLive2D !== 'off' && !isMobile()): ?>
  <script src="<?php cdnBaseUrl() ?>/js/autoload.js"></script>
<?php endif; ?>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/custom.main.js'); ?>"></script>
<script>
  <?php $this->options->CustomScript() ?>
</script>
<?php $this->options->CustomBodyEnd() ?>
<!--搜索  -->
<div id="local-search">
  <div class="search-dialog">
    <nav class="search-nav">
      <span class="search-dialog-title">本地搜索</span>
      <span id="loading-status"></span>
      <button class="search-close-button">
        <i class="fas fa-times"></i>
      </button>
    </nav>
    <div class="search-wrap" style="display: block;">
      <div id="local-search-input">
        <form class="local-search-box" method="post" action="<?php $this->options->siteUrl(); ?>" role="search"
          id="search">
          <label for="s" class="sr-only">
            <?php _e('搜索关键字'); ?>
          </label>
          <input type="text" name="s" placeholder="回车查询" required="required">
      </div>
      </form>
      <hr>
      <div id="local-search-results"></div>
    </div>
  </div>
  <div id="search-mask" style=""></div>
</div>
</div>
<!--搜索end  -->
<div class="js-pjax">
  <?php if (is_array($this->options->beautifyBlock) && in_array('showNoAlertSearch', $this->options->beautifyBlock)): ?>
    <script>
        (function () {
          const searchButton = document.getElementById('search-button');
          const input = document.getElementById('dSearchIn');
          searchButton.addEventListener('click', function () {
            input.style.width = '150px';
            input.focus();
          });
          input.addEventListener('blur', function () {
            input.style.width = '35px';
          });
        })()
    </script>
  <?php endif ?>
  <?php if ($this->options->hcaptchaSecretKey !== "" && $this->options->hcaptchaAPIKey !== ""): ?>
    <script src="https://hcaptcha.com/1/api.js" async defer></script>
  <?php endif ?>
  <?php if ($this->is('post') || $this->is('page')): ?>
    <script src="<?php $this->options->themeUrl('js/comjs.js?v1.4.3'); ?>"></script>
  <?php endif ?>
  <?php if (!empty($this->options->beautifyBlock) && in_array('showButterflyClock', $this->options->beautifyBlock)): ?>
    <script data-pjax>
      function butterfly_clock_anzhiyu_injector_config() {
        var a = document.getElementsByClassName("sticky_layout")[0];
        a && a.insertAdjacentHTML("afterbegin", '<div class="card-widget card-clock"><div class="card-glass"><div class="card-background"><div class="card-content"><div id="hexo_electric_clock"><img class="entered loading" id="card-clock-loading" src= "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-lazy-src="https://cdn.cbd.int/hexo-butterfly-clock-anzhiyu/lib/loading.gif" style="height: 120px; width: 100%;" data-ll-status="loading"/></div></div></div></div></div>')
      }
      for (var elist = "null".split(","), cpage = location.pathname, epage = "all",
        qweather_key = "<?php $this->options->qweather_key() ?>",
        gaud_map_key = "<?php $this->options->gaud_map_key() ?>",
        baidu_ak_key = "undefined", flag = 0,
        clock_rectangle = "112.6534116,27.96920845", clock_default_rectangle_enable = "false", i = 0; i < elist.length; i++) cpage.includes(elist[i]) && flag++;
      "all" === epage && 0 == flag ? butterfly_clock_anzhiyu_injector_config() : epage === cpage && butterfly_clock_anzhiyu_injector_config()
    </script>
    <script src="https://widget.qweather.net/simple/static/js/he-simple-common.js?v=2.0"></script>
    <script data-pjax src="https://cdn.cbd.int/hexo-butterfly-clock-anzhiyu/lib/clock.min.js"></script>
    <link rel="stylesheet" href="https://cdn.cbd.int/hexo-butterfly-clock-anzhiyu/lib/clock.min.css">
  <?php endif ?>
  <?php $this->header('commentReply=1&description=0&keywords=0&generator=0&template=0&pingback=0&xmlrpc=0&wlw=0&rss2=0&rss1=0&antiSpam=0&atom'); ?>
  <?php if ($this->options->NewTabLink == 'on'): ?>
    <script>
      $(document).ready(function () {
        var a = document.getElementsByTagName("a");
        for (let i = 0; i < a.length; i++) {
          let domain = document.domain;
          let url = a[i].href;
          if (typeof (url) != "undefined" && url.length != 0 && url.match(domain) == null && url != "javascript:void(0);") {
            a[i].setAttribute("target", "_BLANK")
          }
        }
      });
    </script>
  <?php endif; ?>
  <?php if ($this->is('index')): ?>
    <script type="text/javascript" src="<?php $this->options->themeUrl('js/wehao.js?v1.7.6'); ?>"></script>
    <style>
      #page-header:not(.not-top-img):before {
        background-color: rgba(0, 0, 0, 0);
      }
    </style>
    <!--打字-->
    <?php if (is_array($this->options->beautifyBlock) && in_array('ShowTopimg', $this->options->beautifyBlock)): ?>
      <?php if (!empty($this->options->CustomSubtitle)): ?>
        <script>
          function subtitleType() {
            if (true) {
              var typed = new Typed("#subtitle", {
                strings: "<?php $this->options->CustomSubtitle() ?>".split(","),
                startDelay: 300,
                typeSpeed: 150,
                loop: <?php $this->options->SubtitleLoop() ?>,
                backSpeed: 50
              })
            }
          }
          "function" == typeof Typed ? subtitleType() : getScript("/usr/themes/butterfly/js/typed.min.js")
            .then(subtitleType)
        </script>
      <?php else: ?>
        <script>
          function subtitleType() {
            fetch("https://v1.hitokoto.cn").then(t => t.json()).then(t => {
              o = 0 == "".length ? new Array : " ".split(",");
              o.unshift(t.hitokoto),
                new Typed("#subtitle", {
                  strings: o,
                  startDelay: 300,
                  typeSpeed: 150,
                  loop: <?php $this->options->SubtitleLoop() ?>,
                  backSpeed: 50
                })
            })
          }
          "function" == typeof Typed ? subtitleType() : getScript("/usr/themes/butterfly/js/typed.min.js")
            .then(subtitleType)
        </script>
      <?php endif ?>
    <?php endif ?>
    <!--打字end-->
    <!--判断主页end-->
  <?php endif ?>
  <?php if (!empty($this->options->slide_cids) && $this->is('index')): ?>
    <script data-pjax>
      function butterfly_swiper_injector_config() {
        var parent_div_git = document.getElementById('recent-posts');
        var item_html = `<div class="recent-post-item" style="height: auto;width: 100%"><div class="blog-slider swiper-container-fade swiper-container-horizontal" id="swiper_container"><div class="blog-slider__wrp swiper-wrapper" style="transition-duration: 0ms;">
                                                                          <?php
                                                                          $slide_cids = $this->options->slide_cids;
                                                                          $cid = explode(',', strtr($slide_cids, ' ', ','));
                                                                          $num = count($cid);
                                                                          $html = "";
                                                                          for ($i = 0; $i < $num; $i++) {
                                                                            $this->widget('Widget_Archive@post' . $i, 'pageSize=1&type=post', 'cid=' . $cid[$i])->to($ji);
                                                                            $html = $html . '<div class="blog-slider__item swiper-slide" style="width: 750px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;"><a class="blog-slider__img" href="' . $ji->permalink . '" alt=""><img width="48" height="48" src="' . get_ArticleThumbnail($ji) . '" alt="" /></a><div class="blog-slider__content"><span class="blog-slider__code">' . date('Y-m-d', $ji->modified) . '</span><a class="blog-slider__title" href="' . $ji->permalink . '" alt="' . $ji->title . '">' . $ji->title . '</a><div class="blog-slider__text">' . $ji->title . '</div><a class="blog-slider__button" href="' . $ji->permalink . '" alt="">详情</a></div></div>';
                                                                          }
                                                                          echo $html;
                                                                          ?>
                                                                          </div><div class="blog-slider__pagination swiper-pagination-clickable swiper-pagination-bullets"></div></div></div>`;
        parent_div_git.innerHTML = item_html + parent_div_git.innerHTML // 无报错，但不影响使用(支持pjax跳转)
        // parent_div_git.insertAdjacentHTML("afterbegin", item_html) // 有报错，但不影响使用(支持pjax跳转)
      }
      if (document.getElementById('recent-posts') && (location.pathname === 'all' || 'all' === 'all')) {
        butterfly_swiper_injector_config()
      }
    </script>
    <script src="https://npm.elemecdn.com/hexo-butterfly-swiper/lib/swiper.min.js"></script>
    <script data-pjax src="https://npm.elemecdn.com/hexo-butterfly-swiper/lib/swiper_init.js"></script>
    <link rel="stylesheet" href="https://npm.elemecdn.com/hexo-butterfly-swiper/lib/swiperstyle.css">
    <link rel="stylesheet" href="https://npm.elemecdn.com/hexo-butterfly-swiper/lib/swiper.min.css">
  <?php endif ?>
</div>
<!--js-pjax end-->
<?php require_once('public/rightside.php'); ?>
<!--pjax-->
<?php if ($this->options->EnablePjax === 'on'): ?>
  <link rel="stylesheet" href="<?php cdnBaseUrl() ?>/css/nprogress.css">
  <script src="<?php cdnBaseUrl() ?>/js/pjax.min.js"></script>
  <script src="<?php cdnBaseUrl() ?>/js/nprogress.js"></script>
  <script>
    let pjaxSelectors = ["title", "#body-wrap", "#rightside-config-hide", "#rightside-config-show", ".js-pjax"];
    var pjax = new Pjax({
      elements: 'a:not([target="_blank"])',
      selectors: pjaxSelectors,
      cacheBust: !1,
      analytics: !1,
      scrollRestoration: !1
    });
    document.addEventListener("pjax:send", (function () {
      if (window.removeEventListener("scroll", window.tocScrollFn), window.removeEventListener("scroll", scrollCollect), "object" == typeof preloader && preloader.initLoading(), window.aplayers)
        for (let e = 0; e < window.aplayers.length; e++) window.aplayers[e].options.fixed || window.aplayers[e].destroy();
      "object" == typeof typed && typed.destroy();
      const e = document.body.classList;
      e.contains("read-mode") && e.remove("read-mode")
      NProgress.start();
    })),
      document.addEventListener("pjax:complete", (function () {
        <?php if ($this->options->hcaptchaSecretKey !== "" && $this->options->hcaptchaAPIKey !== ""): ?>
          hcaptcha.render('h-captcha', {
            sitekey: '<?php $this->options->hcaptchaSecretKey() ?>'
          });
        <?php endif ?>
        <?php $this->options->PjaxCallBack() ?>
        NProgress.done();
        window.refreshFn(),
          document.querySelectorAll("script[data-pjax]").forEach(e => {
            const t = document.createElement("script"),
              o = e.text || e.textContent || e.innerHTML || "";
            Array.from(e.attributes).forEach(e => t.setAttribute(e.name, e.value)), t.appendChild(document.createTextNode(o)), e.parentNode.replaceChild(t, e)
          }),
          GLOBAL_CONFIG.islazyload && window.lazyLoadInstance.update(), "function" == typeof chatBtnFn && chatBtnFn(), "function" == typeof panguInit && panguInit(), "function" == typeof gtag && gtag("config", "", {
            page_path: window.location.pathname
          }),
          "object" == typeof _hmt && _hmt.push(["_trackPageview", window.location.pathname]),
          "function" == typeof loadMeting && document.getElementsByClassName("aplayer").length && loadMeting(),
          "object" == typeof Prism && Prism.highlightAll(), "object" == typeof preloader && preloader.endLoading()
        coverShow()
      })),
      document.addEventListener("pjax:error", e => {
        // 404 === e.request.status && pjax.loadUrl("/404");
        if (e.request.status === 404) {
          window.location = "/404";
        }
        if (e.request.status === 403) {
          window.location = e.request.responseURL
        }
      })
  </script>
<?php endif ?>
<!--pjax end-->
<script>
  let tianliGPT_postSelector = '#post #article-container';
  let tianliGPT_wordLimit = 1000;
  // let tianliGPT_postURL = "*/archives/*.html";
  let tianliGPT_key = '3841b0be5627b3d67830';
</script>
<script src="https://cdn1.tianli0.top/gh/zhheo/Post-Abstract-AI@0.15.2/tianli_gpt.min.js"></script>
</body>

</html>