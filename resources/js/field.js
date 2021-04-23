import { library } from '@fortawesome/fontawesome-svg-core'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'


library.add(fas)

Nova.booting((Vue, router, store) => {

  Vue.component('font-awesome-icon', FontAwesomeIcon)
  Vue.component('index-print-pdf-button', require('./components/IndexField'))
  Vue.component('detail-print-pdf-button', require('./components/DetailField'))
  Vue.component('form-print-pdf-button', require('./components/FormField'))
})
