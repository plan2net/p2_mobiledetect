README.txt

See TODO.txt

# ABOUT
- This extension adds two new device types: "tablet" & "smartPhone" to the TYPO3 Core condition on "device".

# USAGE
- Install (and activate) the Extension via extension manager.
- Use the TYPO3 Core condition as described in: https://docs.typo3.org/typo3cms/TyposcriptReference/Conditions/Reference/Index.html#device
- Add the conditions in your own TypoScript setup, see examples below.

page >
page = PAGE
page {
	10 = TEXT
	10.value = <h1>neither tablet nor smartphone</h1>
}
[device = tablet]
page.10.value = <h1>tablet</h1>
[device = smartPhone]
page.10.value = <h1>smartphone</h1>
[global]



