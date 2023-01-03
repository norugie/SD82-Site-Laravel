(function() {
    'use strict';

    $(sources).each(function() {
        source.push({ "id": this.id, "value": this.name });
    });

    var engine = new Bloodhound({
        local: source,
        datumTokenizer: function(d) {
            return Bloodhound.tokenizers.whitespace(d.value);
        },
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    engine.initialize();

    function existingTokenIdFunction() {
        var e = $('input[name=post_categories_id]').val();
        e = e.split(',');
        e = e.filter(function(e) {
            if (e !== "" && e !== null) return e;
        });

        return e;
    }

    // Initialize tokenfield
    $('#post_categories').tokenfield({
        tokens: value,
        typeahead: [null, { source: engine.ttAdapter() }]
    });

    $('#post_categories')
        .on('tokenfield:createtoken', function(event) {
            var existingTokens = $(this).tokenfield('getTokens');
            $.each(existingTokens, function(index, token) {
                if (token.value === event.attrs.value)
                    event.preventDefault();
            });
        })
        .on('tokenfield:createdtoken', function(event) {
            var existingTokenIds = existingTokenIdFunction();
            existingTokenIds.push(JSON.stringify(event.attrs.id));
            $('input[name=post_categories_id]').val(existingTokenIds.join(','));
        })
        .on('tokenfield:removedtoken', function(event) {
            var existingTokenIds = existingTokenIdFunction();
            existingTokenIds.splice($.inArray(event.attrs.id + '', existingTokenIds), 1);
            $('input[name=post_categories_id]').val(existingTokenIds.join(','));
        });
})();