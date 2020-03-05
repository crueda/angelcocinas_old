// JavaScript Document
//<![CDATA[
  cookieControl({
      introText:'<p>Este espacio utiliza cookies con el fin de mejorar la experiencia del usuario. Si pulsa sobre el botón aceptar, consideramos que acepta su uso. Puede obtener más información, o bien conocer cómo cambiar la configuración, en nuestra Política de cookies</p>',
      fullText:'<p>Estas cookies se establecen al momento de enviar un formulario, acceder o interactuar con el sitio haciendo algo que va más allá de hacer clic en algunos enlaces simples.<br />También utilizamos unas cookies no esenciales para hacer un seguimiento anónimo de visitantes o mejorar tu experiencia en este sitio web. Si no estás contento con esto, no nos fijamos estas cookies, pero algunas características interesantes en el sitio web pueden no estar disponibles.</p><p>Esta información recuperada debe respetar siempre la privacidad del usuario, por ello se ha querido realizar una reforma en el reglamento de la Ley de Privacidad, creando una Nueva Regulación Comunitaria y Nacional, para salvaguardar los intereses de las personas físicas o jurídicas que utilizan un servicio de la sociedad de la información.</p><p>En Angel Cocinas utilizamos las siguientes cookies:</p><p>Cookies __utma, __utmb, __utmc, __utmz, _ga: son las cookies que utiliza el servicio de Google Analytics. El uso de estas cookies nos permite ver de dónde viene un visitante, el tiempo que permanece en nuestra web, las páginas que visita, etc. Es una cookie de seguimiento. Puedes obtener más información sobre el uso que google hace de las cookies pulsando <a href="http://www.google.es/intl/es/policies/technologies/types/">aquí</a></p><p>Cookies khcookie, NID, SNID y PREF: Utilizamos mapas interactivos de Google, porque creemos que proporcionan una forma útil para nuestros visitantes para identificar sus tiendas más cercanas. Utilizamos las herramientas de Google Maps sobre la base de que Google cumple con su política de privacidad que se puede encontrar pulsando <a href="http://www.google.es/intl/es/policies/technologies/types/">aquí</a></p><p>Cookies VISITOR_INFO1_LIVE, use_hitbox, and PREF: A veces usamos YouTube para alojar contenido de vídeo. Cuando visitas una página en nuestra página web que contiene un video incrustado de YouTube, YouTube crea, al menos, tres cookies: VISITOR_INFO1_LIVE, use_hitbox y PREF. En algunos casos, se crea una cookie GEO. Utilizamos los servicios de YouTube para la comodidad de nuestros visitantes, y siempre que se siga la política de privacidad de Google que se puede encontrar pulsando <a href="http://www.google.es/intl/es/policies/technologies/types/">aquí</a></p><p>Para el control de las cookies de terceros, también puede ajustar la configuración del navegador.<br />Todos los navegadores suelen tener la opción de ver y eliminar las cookies instaladas en el equipo cliente. Si deseas eliminar las cookies instaladas en tu equipo te recomendamos que utilices un buscador web (por ejemplo google.es) y realices una búsqueda con los siguientes términos: "eliminar cookies en xxx" (sin comillas) y sustituyas xxx por el nombre del navegador que te interese. Para facilitarte la tarea te proporcionamos enlace directo a la información sobre cómo eliminar las cookies en los principales navegadores:<p><a href="https://support.google.com/chrome/answer/95647?hl=es">·Eliminar cookies en Chrome</a><br /><a href="https://support.mozilla.org/es/kb/Borrar%20cookies">·Eliminar cookies en Firefox</a><br /><a href="http://windows.microsoft.com/es-xl/internet-explorer/delete-manage-cookies#ie=ie-10">·Eliminar cookies en Internet Explorer</a><br /><a href="http://support.apple.com/kb/HT1677?viewlocale=es_ES&locale=es_ES">·Eliminar cookies en Safari</a><br /><a href="http://help.opera.com/Windows/11.50/es-ES/cookies.html">·Eliminar cookies en Opera</a></p><p>&nbsp;</p>',
      position:'top', // left or right
      shape:'diamond', // triangle or diamond
      theme:'dark', // light or dark
      startOpen:true,
      autoHide:300000,
      subdomains:true,
      protectedCookies: [], //list the cookies you do not want deleted ['analytics', 'twitter']
      consentModel:'explicit',
      onAccept:function(){ccAddAnalytics()},
      onReady:function(){},
      onCookiesAllowed:function(){ccAddAnalytics()},
      onCookiesNotAllowed:function(){},
      countries:'Spain, France, Italy, United Kingdom, Germany, Netherland' // Or supply a list ['United Kingdom', 'Greece']
      });

      function ccAddAnalytics() {
        jQuery.getScript("http://www.google-analytics.com/ga.js", function() {
          var GATracker = _gat._createTracker('UA-47515248-48');
          GATracker._trackPageview();
        });
      }
   //]]>