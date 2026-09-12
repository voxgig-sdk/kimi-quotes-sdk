import { KimiQuotesEntityBase } from '../KimiQuotesEntityBase';
import type { KimiQuotesSDK } from '../KimiQuotesSDK';
import type { Control } from '../types';
import type { Quote, QuoteLoadMatch, QuoteListMatch } from '../KimiQuotesTypes';
declare class QuoteEntity extends KimiQuotesEntityBase<Quote> {
    constructor(client: KimiQuotesSDK, entopts: any);
    make(this: QuoteEntity): QuoteEntity;
    load(this: any, reqmatch?: QuoteLoadMatch, ctrl?: Control): Promise<QuoteEntity>;
    list(this: any, reqmatch?: QuoteListMatch, ctrl?: Control): Promise<QuoteEntity[]>;
}
export { QuoteEntity };
