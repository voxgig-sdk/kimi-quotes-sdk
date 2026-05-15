package core

type KimiQuotesError struct {
	IsKimiQuotesError bool
	Sdk              string
	Code             string
	Msg              string
	Ctx              *Context
	Result           any
	Spec             any
}

func NewKimiQuotesError(code string, msg string, ctx *Context) *KimiQuotesError {
	return &KimiQuotesError{
		IsKimiQuotesError: true,
		Sdk:              "KimiQuotes",
		Code:             code,
		Msg:              msg,
		Ctx:              ctx,
	}
}

func (e *KimiQuotesError) Error() string {
	return e.Msg
}
