
export function allCookiesAccepted(payload = {}) {
  const event = new CustomEvent('allCookiesAccepted', {payload: payload});

  window.dispatchEvent(event);
}


export function essentialCookiesAccepted(payload = {}) {
  const event = new CustomEvent('essentialCookiesAccepted', {payload: payload});

  window.dispatchEvent(event);
}


export function CookieConsentInitialised(payload = {}) {
  const event = new CustomEvent('CookieConsentInitialised', {payload: payload});

  window.dispatchEvent(event);
}
