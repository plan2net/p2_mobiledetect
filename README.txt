README.txt

See TODO.txt

# ABOUT
- This Extension adds the 2 new device-types: "tablet" & "smartPhone" to the TYPO3 Core Condition on "device".

# USAGE
- Install (and activate) the Extension (via EXT Mngr).
- Use the TYPO3 Core Condition as described in: https://docs.typo3.org/typo3cms/TyposcriptReference/Conditions/Reference/Index.html#device
- Add the Conditions in your own TypoScript-Setup, see below Examples.


page >
page = PAGE
page {
	10 < styles.content.get
	20 = TEXT
	20.value = <h1>NEIGHTER tablet NOR smartPhone</h1>
}
[device = tablet]
page.20.value = <h1>tablet</h1>
[device = smartPhone]
page.20.value = <h1>smartPhone</h1>
[global]



