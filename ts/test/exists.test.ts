
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { KimiQuotesSDK } from '..'


describe('exists', async () => {

  test('test-mode', async () => {
    const testsdk = await KimiQuotesSDK.test()
    equal(null !== testsdk, true)
  })

})
