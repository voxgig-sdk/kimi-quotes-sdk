
import { Context } from './Context'


class KimiQuotesError extends Error {

  isKimiQuotesError = true

  sdk = 'KimiQuotes'

  code: string
  ctx: Context

  constructor(code: string, msg: string, ctx: Context) {
    super(msg)
    this.code = code
    this.ctx = ctx
  }

}

export {
  KimiQuotesError
}

